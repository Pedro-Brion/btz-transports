@extends('layouts.app')

@section('content')

    <h1>HOME</h1>
    <button onclick="document.location='{{route('users')}}'">Go to users</button>

@endsection
