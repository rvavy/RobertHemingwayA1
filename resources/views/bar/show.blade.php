@extends('layouts.layout')
@section('title')
	{{$bar->name}}
@stop

@section('body')
{!!Form::open ([

	'method' => 'delete',

	'route' => ['bar.destroy', $bar->id]

])!!}

<h1>{{$bar->name}}</h1>
<h2>{{$bar->street}}</h2>
<h3>{{$bar->information}}</h3>


<a href="{{route('bar.edit', $bar->id)}}">Edit</a>  

{!!Form::submit('Delete')!!}

{!!Form::close()!!}

@stop