@extends('layouts.mainLayout')

@php

    $data = config('pastaDB');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $product) {
        if ($product["tipo"] == "lunga") {
            $lunga[] = $product;
        } elseif ($product["tipo"] == "corta") {
            $corta[] = $product;
        } elseif ($product["tipo"] == "cortissima") {
            $cortissima[] = $product;
        }
    }

@endphp

@section('title')
La Molisana - Official page
@endsection


@section('main_content')

<div class="container">
    @if (!empty($lunga))
    <h2>LE LUNGHE</h2>
    <ul>
      @foreach ($lunga as $type)
      <li class="box-product">
        <img class="" src="{{$type['src']}}" alt="" />
        <h2 class="">{{$type["titolo"]}}</h2>
      </li>
      @endforeach
    </ul>
    @endif


    @if (!empty($lunga))
    <h2>LE CORTE</h2>
    <ul>
      @foreach ($corta as $type)
      <li class="box-product">
        <img class="" src="{{$type['src']}}" alt="" />
        <h2 class="">{{$type["titolo"]}}</h2>
      </li>
      @endforeach
    </ul>
    @endif

    @if (!empty($lunga))
    <h2>LE CORTISSIME</h2>
    <ul>
      @foreach ($cortissima as $type)
      <li class="box-product">
        <img class="" src="{{$type['src']}}" alt="" />
        <h2 class="">{{$type["titolo"]}}</h2>
      </li>
      @endforeach
    </ul>
    @endif
</div>

@endsection
