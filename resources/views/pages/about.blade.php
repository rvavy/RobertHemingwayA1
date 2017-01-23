@extends('layouts.layout')

@section('title')
  About
@stop

@section('body')
  <h1>This is the about page.</h1>

  {!!Form::text('price')!!}
@stop
