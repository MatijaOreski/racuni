@extends('layouts.app')

@section('content')
<div>
    <br>
    <h1>Stavke</h1>
    <h3>Ovdje možete dodati artikal</h3>
    <br><hr>
</div>

<div>
    <br>
    <h2 class="pull-left">Stavke tvrtke: &nbsp;<strong><em>{{ $naziv_tvrtke->naziv }}</em></strong></h2> 
    <br>
    <a href="dodaj_stavku/{{$account_id->id}}" class="btn btn-success pull-right">Dodaj novi artikal</a>
    <br>
    <br>       
    <div class = wrapper> 
        @if(count($items) > 0)
            <table id="racun" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr style='background-color:#97b9ef'>
                        <th>Naziv</th>
                        <th>Opis</th>
                        <th>Cijena</th>
                        <th>količina</th>
                        <th style='background-color:#e03737'>Bez PDV-a</th>
                        <th style='background-color:#e03737'>PDV 25%</th>
                        <th style='background-color:#3d8a33'>Ukupno</th>
                    </tr>
                </thead>

                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->naziv}}</td>
                        <td>{{$item->opis}}</td>
                        <td>{{$item->cijena}} kn</td>
                        <td>{{$item->kolicina}}</td>
                        <td>{{$item->cijena * $item->kolicina}} kn</td>
                        <td>{{$item->cijena * $item->kolicina * 25 / 100}} kn</td>
                        <td>{{$item->cijena * $item->kolicina * 25 / 100 + $item->cijena * $item->kolicina}} kn</td>
                    </tr>
                @endforeach

            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <tr>
                    <th style="width:80%; background-color:#fff;border-color:#fff;">&nbsp;</th>
                    <th style='background-color:#c6ccc5'>Ukupno: {{$total}} kn</th>
                </tr>
            </table>
        @else
            <h2><strong>Nemate artikle na svojoj listi! Dodajte artikle.</strong></h2>
        @endif
        
        <br>
        <a href="../pocetna" class="btn btn-success pull-left">Vrati se</a>
        
    </div>
@extends('table')

@endsection