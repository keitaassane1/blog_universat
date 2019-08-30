@extends('backend.layout')

@section('content')

    <h1> Welcome to the Editor Dashboard </h1>
    {{ Auth::user()->role  }}

@endsection
