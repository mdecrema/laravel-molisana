@extends('layouts.mainLayout')

@php

    $data = config('pastaDB');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $product) {
        if ($product["tipo"] == "lunga") {
            $lunga[$key] = $product;
        } elseif ($product["tipo"] == "corta") {
            $corta[$key] = $product;
        } elseif ($product["tipo"] == "cortissima") {
            $cortissima[$key] = $product;
        }
    }

@endphp

@section('title')
La Molisana - Official Page
@endsection


@section('main_content')

<div class="container">
    @if (!empty($lunga))
    <h2 class="mini-title">LE LUNGHE</h2>
   
      @foreach ($lunga as $key => $type)
      <div class="box-product">
        <img class="zoom" src="{{$type['src']}}" alt="" />
        <div class="hidden-box">
            <div class="h-b-text">
                <a href="prodotti/show/{{$key}}">{{$type["titolo"]}}</a>
            </div>
            <div class="h-b-text">
                <a href=""><span class="material-icons">local_dining</span></a>
            </div> 
        </div>
      </div>
      @endforeach
  
    @endif


    @if (!empty($corta))
    <h2 class="mini-title">LE CORTE</h2>
    
      @foreach ($corta as $key => $type)
      <div class="box-product">
        <img class="" src="{{$type['src']}}" alt="" />
        <div class="hidden-box">
            <div class="h-b-text">
                <a href="prodotti/show/{{$key}}">{{$type["titolo"]}}</a>
            </div>
            <div class="h-b-text">
                <a href=""><span class="material-icons">local_dining</span></a>
            </div> 
        </div>
      </div>
      @endforeach
    
    @endif

    @if (!empty($cortissima))
    <h2 class="mini-title">LE CORTISSIME</h2>
    
      @foreach ($cortissima as $key => $type)
      <div class="box-product">
        <img class="" src="{{$type['src']}}" alt="" />
        <div class="hidden-box">
            <div class="h-b-text">
                <a href="prodotti/show/{{$key}}">{{$type["titolo"]}}</a>
            </div>
            <div class="h-b-text">
                <a href=""><span class="material-icons">local_dining</span></a>
            </div> 
        </div>
      </div>
      @endforeach
   
    @endif
</div>

@endsection
