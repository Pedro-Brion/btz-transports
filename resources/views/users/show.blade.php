@extends('layouts.app')


@section('content')

    <h1>Usuario</h1>

    @isset($fetched['name'])
        <p>Nome: {{ $fetched['name'] }}</p>
        <p>Idade: {{ $fetched['age'] }}</p>
    @endisset
    @empty($fetched['name'])
        <p>{{$fetched}}</p>
    @endempty

@endsection
