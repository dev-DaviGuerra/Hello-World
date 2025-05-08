@extends('layout')

@section('title', $title)



@section('content')
<h1>Olá!</h1>
<p>Nossas formas de contato são: email e celular</p>
<p> {{$data}} </p>
@endsection