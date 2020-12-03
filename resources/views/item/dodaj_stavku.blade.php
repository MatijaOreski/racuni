@extends('layouts.app')

@section('content')
<div style="background-color: #f0f5f5;margin:20px 0; padding:20px 20px 100px 20px; border-radius:3px;">
    <div>
        <br>
        <h1>Novi artikal</h1>
        <h3>Dodajte novi artikal na Vaš račun</h3>
        <br>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                Sva polja treba popuniti da biste mogli kreirati Vaš račun!
            </div>
        @endif
        <br>
        
        <h2 id="msg">
            <strong>{{ session('smsg')}}</strong>     
        </h2>
        <script>
            const obv = document.getElementById('msg');
            setTimeout(() => obv.remove(), 2000);
        </script>

        <hr>
    </div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Izradite artikal</h2>
                    </div>

                    <form action="../dodaj_stavku" method="POST">
                        @csrf

                        <input type="hidden" name="racun_id" value="{{$account_id->id}}">

                        <div class="form-group">
                            <label>Naziv:</label>
                            <input type="text" name="naziv" class="form-control">
                        </div>

                        <div class="form-group>">
                        <label>Opis:</label>
                            <input type="text" name="opis" class="form-control">  
                        </div>

                        <div class="form-group>">
                        <label>Cijena:</label>
                            <input type="number" name="cijena" class="form-control">  
                        </div>

                        <div class="form-group>">
                            <label>Količina:</label>
                                <input type="number" name="kolicina" class="form-control">  
                        </div>

                        
                        <br>
                        <input type="submit" name ="Submit" class="btn btn-primary" value="Snimi">
                        <a href="../../stavke/{{$account_id->id}}" class="btn btn-default">Prekid</a>
                        
                    </form>
                </div>
                <br>
            </div>        
        </div>
    </div>
</div>
@endsection