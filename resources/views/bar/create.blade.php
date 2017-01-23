@extends('layouts.layout')
@section('title')
  Create new Bar
@stop

@section('body')

  {!!Form::open(['route' => 'bar.store'])!!}

  {!!Form::label('name', 'Name')!!}
  {!!Form::text('name', null, ['placeholder' => "Give a Name"])!!}

  <br>

  {!!Form::label('street', 'Street')!!}
  {!!Form::text('street', null, ['placeholder' => "Enter Street"])!!}

  <br>

  {!!Form::label('information', 'Information')!!}
  {!!Form::text('information', null, ['placeholder' => "Enter Info"])!!}

  <br>

  {!!Form::submit('Create')!!}

  {!!Form::close()!!}
@stop
