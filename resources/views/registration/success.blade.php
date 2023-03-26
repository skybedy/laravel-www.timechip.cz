@extends('base')

@php
    $title = 'Seznam registrací';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')


   <div class="alert alert-success">
        Děkujeme za přihlášení, na vaši e-mailovou adresu byla odeslána zpráva s dalšími informacemi.<br>
        V případě, že vám e-mail nepřijde (zkontrolujte si i složku s nevyžádanou poštou), nenajdete se ve <a href="{{ route('registration_list',['raceName' => $raceName,'raceYear' => $raceYear,'raceId' => $raceId]) }}">výpisu přihlášek</a>, nebo narazíte na jiný problém, kontaktujte nás prosím buď prostřednictvím e-mailu na <a href=\"mailto:info@timechip.cz\">info@timechip.cz</a>
   </div>





@endsection
