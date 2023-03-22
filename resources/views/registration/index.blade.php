@extends('base')

@php
    $title = 'Seznam prihlasek';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')

<div class="row mb-5">
    <div class="col-sm-11 text-end">
        <a class="btn  btn-outline-danger
        {{ request()->url() == route('registration',['raceName' => $raceName, 'raceYear' => $raceYear,'raceId' => $raceId])  ? ' active' : ''}}
        
        " href="{{ route('registration',['raceName' => $raceName, 'raceYear' => $raceYear,'raceId' => $raceId]) }}" role="button">Přihlašovací formulář</a>
        
        
        
        <a class="btn  btn-outline-danger" href="{{ route('registration_list',['raceYear' => $raceYear,'raceId' => $raceId,'raceName' => $raceName]) }}" role="button">Seznam přihlášek</a>
    </div>
</div>    




@endsection
