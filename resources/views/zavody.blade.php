@extends('base')

@php
    $title = 'Závody '.$raceYear;
@endphp

@section('title', $title)

@section('h1', $title)


@section('content')
    
    <table class="table table-hover">
        @foreach ($races as $race)
            <tr>
                <td>{{$race->nazev_zavodu}}</td>
                <td>{{$race->misto_zavodu}}</td>
                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $race->datum_zavodu)->format('j. n')}}</td>
                <td>{{$race->typ_zavodu}}</td>
              
                <td>{!! $race->web == null ? '&nbsp;'  :  '<a target="_blank" href="$race->web">'.$race->web.'</a>'!!}</td>
            <!-- <td>{{'' ?: $race->nove_vysledky}}</td>-->
            </tr>
        @endforeach
    </table>    

@endsection