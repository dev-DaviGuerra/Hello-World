@extends('layout')

@section('title', $title)


@section('content')
<h1>Conheça nosso serviços!</h1>
<ul>

    @for($i = 0; $i < count($servicos); $i++)
    <li>{{ $servicos[$i]['name']}} - {{ $servicos[$i]['description'] }} ----> Item {{$i + 1}}</li>
    @endfor

<!--
    @foreach($servicos as $servico)
    <li> {{ $servico['name']}} - {{ $servico['description']}} </li>
    @endforeach
-->
</ul>
@endsection
