@extends('errors::layout')

@section('title','Page non accessible')

@section('message')

<div>
<h2>Oups !!!</h2>
</div>

<div>
<img   src="{{ asset('../image/404.png')}}" >
</div>


@endsection





