@extends('layouts.layout')
@section('title')
  All Bars
@stop

@section('body')
  @foreach($bars as $bar)
    <h1>{{$bar->name}}</h1>
    <h2>{{$bar->street}}</h2>
    <h3>{{$bar->information}}</h3>
    <br>
  @endforeach
@stop
