@extends('layouts.mainLayout')

@section('title')
    Dettagli
@endsection

@section('main_content')
    <div class="box-details">
        <div class="details-title">
            <h3>{{$data['titolo']}}</h3>
        </div>
            <img class="d-img" src="{{$data['src-h']}}" alt="" />
            <img class="d-img" src="{{$data['src-p']}}" alt="" />
        <div class="details-p">
            <p>{!!$data['descrizione']!!}</p> 
        </div>
    </div>
@endsection

