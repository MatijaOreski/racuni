@extends('layouts.login')

@section('content_login')

<div id="loginBackground">
    <div class="box">
        <form method="POST">
            @csrf
            <h1>Login</h1>
            <input type="text" placeholder="korisničko ime" name="username">
            <input type="password" placeholder="lozinka" name="password">
            <input type="submit" placeholder="" value="Login" name="submit">

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    Sva polja treba popuniti!
                </div>
            @endif

            @if($message = Session::get('error'))
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @endif

        </form>
    </div>
</div>

@endsection