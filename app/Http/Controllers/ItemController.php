<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use App\Item;
use App\Account;
use App\ItemAccount;

class ItemController extends Controller
{
    public function show($id)
    {
        $account_id = Account::find($id);
        $naziv_tvrtke = DB::table('accounts')->select('naziv', 'naziv')->where('id', $account_id->id)->first();

        $items = DB::table('item_accounts')
                        ->join('accounts', 'accounts_id', '=', 'accounts.id')
                        ->join('items', 'items_id', '=', 'items.id')
                        ->select('items.naziv', 'items.opis', 'items.cijena', 'items.kolicina')
                        ->where('accounts.id', $account_id->id)
                        ->get();
                    
        $total = 0;
        foreach($items as $item)
        {
            $total += $item->cijena * $item->kolicina * 25 / 100 + $item->cijena * $item->kolicina;
        }
        $total;

        return view('item.items')->with([
            'account_id' => $account_id,
            'naziv_tvrtke' => $naziv_tvrtke,
            'items' => $items,
            'total' => $total
        ]);
    }

    public function items($id)
    {
        $account_id = Account::find($id);

        return view('item.dodaj_stavku')->with('account_id', $account_id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'naziv' => 'required',
            'opis' => 'required',
            'cijena' => 'required',
            'kolicina' => 'required'
        ]);

        $racun_id = request('racun_id');

        $item = new Item();

        $item->naziv = request('naziv');
        $item->opis = request('opis');
        $item->cijena = request('cijena');
        $item->kolicina = request('kolicina');
        $item->save();

        $stavka_id = DB::table('items')->count();

        $itemAccount = new ItemAccount();

        $itemAccount->accounts_id = $racun_id;
        $itemAccount->items_id = $stavka_id;
        $itemAccount->save();

        return back()->with('smsg', 'Artikal '.$item->naziv.' je uspješno dodan na listu!');
    }
}
