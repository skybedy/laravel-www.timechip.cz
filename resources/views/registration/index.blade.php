@extends('base')

@php
    $title = 'Registrace';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')
    


{{ Form::open(array('url' => 'foo/bar')) }}
    echo Form::label('email', 'E-Mail Address');
{{ Form::close() }}




@endsection