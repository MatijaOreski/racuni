@extends('layouts.app')

@section('content')
<div style="background-color: #f0f5f5;margin:20px 0; padding:20px 20px 100px 20px; border-radius:3px;">
    <div>
        <br>
        <h1>Novi račun</h1>
        <h3>Izradite novi račun</h3>
        <br>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                Sva polja treba popuniti da biste mogli kreirati Vaš račun!
            </div>
        @endif

        @if($message = Session::get('error'))
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @endif

        <br><hr>
    </div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Broj vašeg novog računa &nbsp;<strong><em>{{ $randNumber }}</em></strong></h2>
                    </div>

                    <form action="dodaj_racun" method="POST">
                        @csrf

                        <input type="hidden" name="broj_racuna" value="{{ $randNumber }}">
                        <input type="hidden" name="datum_racuna" value="{{ $current_date }}">
                        <input type="hidden" name="datum_valuta" value="{{ $currency_date }}">

                        <div class="form-group">
                            <label>Naziv tvrtke:</label>
                            <input type="text" name="naziv" class="form-control">
                        </div>

                        <div class="form-group>">
                        <label>Adresa:</label>
                            <input type="text" name="adresa" class="form-control">  
                        </div>

                        <div class="form-group>">
                        <label>Grad:</label>
                            <input type="text" name="grad" class="form-control">  
                        </div>

                        <div class="form-group>">
                            <label>OIB: (Obavezno upisati broj)</label>
                                <input type="number" name="OIB" class="form-control">  
                        </div>

                        
                        <br>
                        <input type="submit" name ="Submit" class="btn btn-primary" value="Snimi">
                        <a href="pocetna" class="btn btn-default">Prekid</a>
                        
                    </form>
                </div>
                <br>
            </div>        
        </div>
    </div>
</div>
@endsection