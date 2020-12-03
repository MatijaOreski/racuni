@extends('layouts.app')

@section('content')
<div>
    <br>
    <h1>Dobrodošli!</h1>
    <h3>Online izdavanje računa</h3>
    <br><br>

    <h2 id="obv">
        <strong>{{ session('msg')}}</strong>     
    </h2>
    <script>
        const obv = document.getElementById('obv');
        setTimeout(() => obv.remove(), 3000);
    </script>
    <hr>
</div>

<div>
    <br>
    <h2 class="pull-left">Pregled računa</h2> 
    <br>
    <a href="novi_racun" class="btn btn-success pull-right">Dodaj novi račun</a>
    <br>
    <br>       
    <div class = wrapper> 
        @if(count($accounts) > 0)
            <table id="racun" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr style='background-color:#97b9ef'>
                        <th>&nbsp;</th>
                        <th>Broj računa</th>
                        <th>Naziv tvrtke</th>
                        <th>Adresa</th>
                        <th>Grad</th>
                        <th>OIB</th>
                        <th>Datum kreiranja</th>
                        <th>Datum dospjeća</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                @foreach ($accounts as $account)
                    <tr>
                        <td><a href="pdf/{{$account->id}}"><i class="material-icons">description</i></a></td>
                        <td>{{$account->broj_racuna}}</td>
                        <td>{{$account->naziv}}</td>
                        <td>{{$account->adresa}}</td>
                        <td>{{$account->grad}}</td>
                        <td>{{$account->OIB}}</td>
                        <td>{{date('d.m.Y', strtotime($account->datum_racuna))}}</td>
                        <td>{{date('d.m.Y', strtotime($account->datum_valuta))}}</td>
                        <td><a href="stavke/{{$account->id}}"><i class="material-icons">info</i></a></td>
                    <tr>
                @endforeach
            </table>
            <br>
            {{$accounts->links()}}
        @else
            <h2>Nema kreiranih računa! Kreirajte račun.</h2>
        @endif
    <br>
    <a href="../public" class="btn btn-success pull-left">Izlaz</a>

</div>
@extends('table')

@endsection