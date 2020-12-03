@extends('layouts.pdfApp')

@section('content')
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        @if(count($from) > 0)
                            @foreach ($from as $item)
                                <strong>{{$item->tvrtka}}</strong>
                                <br>
                                {{$item->adresa}}
                                <br>
                                {{$item->grad}}
                                <br>
                                OIB: {{$item->OIB}}
                            @endforeach
                        @endif
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    @if(count($tvrtka) > 0)
                            @foreach ($tvrtka as $item)
                                <em>{{$item->naziv}}</em><br>
                                <em>{{$item->adresa}}</em><br>
                                <em>{{$item->grad}}</em><br>
                                <em>OIB: {{$item->OIB}}</em><br>
                                <strong>Datum računa: </strong><em>{{date('d.m.Y', strtotime($item->datum_racuna))}}</em><br>
                                <strong>Datum dispijeća: </strong><em>{{date('d.m.Y', strtotime($item->datum_valuta))}}</em><br>
                            @endforeach
                        @endif      
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    @foreach ($tvrtka as $racun)
                        <h1>Račun {{$racun->broj_racuna}}</h1>
                    @endforeach
                    
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Stavke</th>
                            <th>Količina</th>
                            <th class="text-center">Jedinična cijena</th>
                            <th class="text-center">Ukupno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($items) > 0)
                            @foreach ($items as $item)
                                <tr>
                                    <td class="col-md-9"><em>{{$item->naziv}}</em></h4></td>
                                    <td class="col-md-1" style="text-align: center">{{$item->kolicina}}</td>
                                    <td class="col-md-1 text-center">{{$item->cijena}} kn</td>
                                    <td class="col-md-1 text-center">{{$item->cijena * $item->kolicina}} kn</td>
                                </tr>
                            @endforeach
                        @endif

                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right" style="width: 30%;">
                                <p>
                                    <strong>BEZ PDV-A </strong>
                                </p>
                                <p>
                                    <strong>PDV 25% </strong>
                                </p>
                            </td>
                            <td class="text-center">
                            <p>
                                <strong>{{$taxfree}}</strong>
                            </p>
                            <p>
                                <strong>{{$tax}}</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td style="width: 20%;"></td>
                            <td style="widht:10%;"></td>
                            <td style="width:50%;"><h4><strong>UKUPNO HRK</strong></h4></td>
                                <td class="text-center text-danger">
                                    <h4>
                                        {{$total}}
                                    </h4>
                                <td>
                        </tr>
                    </tbody>
                </table>
                <div class='alert alert-success'>
                    Račun izradio: <strong>Matija Oreški</strong> --- Privredna banka Zagreb d. d. Zagreb
                </div>
            </div>
            <div id="printButtons">
                <button id="printbtn" type="button" onclick="window.print();" class="btn btn-primary">Print PDF</button>
                <a href="../pocetna" class="btn btn-default">Vrati se</a>
            </div>
        </div>
    </div>

    
@endsection