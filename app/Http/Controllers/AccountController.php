<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use App\Account;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::orderBy('id')->paginate(5);
        return view('start.pocetna')->with('accounts', $accounts);
    }

    public function show()
    {
        $rand1 = rand(10, 90);
        $rand2 = rand(10, 90);
        $rand3 = rand(1, 9);

        $randStr1 = strval($rand1);
        $randStr2 = strval($rand2);
        $randStr3 = strval($rand3);

        $randNumber = $randStr1 ."/". $randStr2 ."/". $randStr3;

        $current_date = date("Y-m-d");
        $currency_date = date("Y-m-d", strtotime($current_date . "+15 day"));

        return view('start.novi_racun')->with([
            'randNumber' => $randNumber,
            'current_date' => $current_date,
            'currency_date' => $currency_date
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'naziv' => 'required',
            'adresa' => 'required',
            'grad' => 'required',
            'OIB' => 'required'
        ]);
            
        $number = request('OIB');

        if(strlen($number) < 11 || strlen($number) > 11)
        {
            $fmsg = "Polje OIB obavezno mora sadržavati 11 karaktera! (Vi ste upisali ".strlen($number). " karaktera.)";
            return back()->with('error', $fmsg);
        }
        else
        {
            $account = new Account();

            $account->broj_racuna = request('broj_racuna');
            $account->naziv = request('naziv');
            $account->adresa = request('adresa');
            $account->grad = request('grad');
            $account->OIB = request('OIB');
            $account->datum_racuna = request('datum_racuna');
            $account->datum_valuta = request('datum_valuta');
            $account->save();

            return redirect('/pocetna')->with('msg', 'Račun '.$account->naziv.' je uspješno kreiran!');
        }

        
    }
}
