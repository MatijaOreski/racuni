<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use\App\From;
use\App\Account;
use\App\Item;
use\App\ItemAccount;

class PdfController extends Controller
{
    public function show($id)
    {
        $account_id = Account::find($id);

        $from = DB::table('froms')->get();

        $tvrtka = DB::table('accounts')
                    ->select('id', 'broj_racuna', 'naziv', 'adresa', 'grad', 'OIB', 'datum_racuna', 'datum_valuta')
                    ->where('id', $account_id->id)
                    ->get();

        $items = DB::table('item_accounts')
                    ->join('accounts', 'accounts_id', '=', 'accounts.id')
                    ->join('items', 'items_id', '=', 'items.id')
                    ->select('items.naziv', 'items.opis', 'items.cijena', 'items.kolicina')
                    ->where('accounts.id', $account_id->id)
                    ->get();

        $taxfree = 0;
        foreach($items as $item)
        {
            $taxfree += $item->cijena * $item->kolicina;
        }
        $taxfree;

        $tax = 0;
        foreach($items as $item)
        {
            $tax += $item->cijena * $item->kolicina * 25 / 100;
        }
        $tax;

        $total = 0;
        foreach($items as $item)
        {
            $total += $item->cijena * $item->kolicina * 25 / 100 + $item->cijena * $item->kolicina;
        }
        $total;

        return view('pdf.pdf')->with([
            'from' => $from,
            'tvrtka' => $tvrtka,
            'items' => $items,
            'total' => $total,
            'tax' => $tax,
            'taxfree' => $taxfree
        ]);
    }
}
