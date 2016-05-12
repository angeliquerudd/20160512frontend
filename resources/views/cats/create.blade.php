@extends('layouts.master')
@section('header')
@if (isset($breed))
<a href="{{ url('/') }}">Back to the overview</a>
@endif
	<h2>Add a new cat</h2>
@stop
@section('content')
@foreach ($cats as $cat)
{!! Form::open(['url' => '/cats']) !!}
	@include('partials.forms.cat')
	{!! Form::close() !!}
@endforeach
@stop