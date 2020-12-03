<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use\App\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function login(Request $request)
    {
        $user = DB::table('users')->where('username', 'admin')->first();
        $pass = DB::table('users')->where('password', 'admin')->first();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );

        if($user_data['username'] == $user->username && $user_data['password'] == $pass->password)
        {
            return redirect('pocetna');
        }
        else
        {
            return back()->with('error', 'Pogrešno korisničko ime ili lozinka!');
        }
    }

}
