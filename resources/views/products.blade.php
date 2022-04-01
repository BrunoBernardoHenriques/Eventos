@extends('layouts.main')

@section('title', 'Produtos Brabos')

@section('content')

<h1> Esta é a página de Produtos</h1>
<a href="/">Voltar home</a>

@if($busca != '')
<p> A procura é : {{$busca}}
@endif
@endsection