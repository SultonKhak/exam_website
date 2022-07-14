@extends('Master')
@section('title','Home')
@section('content')

    <h1 style="margin-top: 15%; text-align: center">Welcome, {{Auth::user()->name}}</h1>

@endsection