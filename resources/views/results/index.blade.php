@extends('base')

@php
    $title = 'Výsledky '.$raceYear;
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')

@foreach ($resultList as $result)

@if ($loop->iteration % 4 == 1)
<div class="row">
    @endif 





<div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <div style="height:44px">
          <h5 class="card-title h-100">{{ $result->nazev_zavodu }}</h5>
        </div>
        <hr>
        <p class="card-text">
          <span class="h6">{{$result->misto_zavodu}}</span><br>
          {{ \Carbon\Carbon::createFromFormat('Y-m-d', $result->datum_zavodu)->format('j. n. Y') }}
        </p>
        <a href="{{ url('vysledky/'.$raceYear.'/'.str_replace('_','-',$result->kod_zavodu)) }}" class="btn btn-primary">Zobrazit výsledky</a>
      </div>
    </div>
  </div>
  
  @if ($loop->iteration % 4 == 0)
</div><hr>
    @endif




@endforeach




@endsection