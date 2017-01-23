@extends('layouts.layout')
@section('title')

Edit {{$bar->name}}
@stop


@section('body')

{!!Form::model($bar, [

	'method' => 'patch',

	'route' => ['bar.update', $bar->id]

])!!}

  {!!Form::label('name', 'Name')!!}
  {!!Form::text('name', $bar->name, ['placeholder' => "Give a Name"])!!}

  <br>

  {!!Form::label('street', 'Street')!!}
  {!!Form::text('street', $bar->street, ['placeholder' => "Enter Street"])!!}

  <br>

  {!!Form::label('information', 'Information')!!}
  {!!Form::text('information', $bar->information, ['placeholder' => "Enter Info"])!!}

  <br>

{!!Form::submit('Edit')!!}
{!!Form::close()!!}

@stop


