@extends('layouts.mainLayout')

@section('title')
    Dettagli
@endsection

@section('main_content')
    <div class="box-details">
        <h3 class="details-title">{{$data['titolo']}}</h3>
        <p class="details-p">{{$data['descrizione']}}</p> 
    </div>
@endsection

