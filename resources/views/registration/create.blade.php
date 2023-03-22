@extends('base')

@php
    $title = 'Registrace';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="row mb-5">
    <div class="col-sm-11 text-end">
        <a class="btn  btn-outline-danger
        {{ request()->url() == route('registration',['raceName' => $raceName, 'raceYear' => $eventList['race_year'],'raceId' => $eventList['race_id']])  ? ' active' : ''}}
        
        " href="{{ route('registration',['raceName' => $raceName, 'raceYear' => $eventList['race_year'],'raceId' => $eventList['race_id']]) }}" role="button">Přihlašovací formulář</a>
        <a class="btn  btn-outline-danger" href="{{ route('registration_list',['raceName' => $raceName, 'raceYear' => $eventList['race_year'],'raceId' => $eventList['race_id']]) }}" role="button">Seznam přihlášek</a>
    </div>
</div>    





  <form name="model" id="add-blog-post-form" method="post" action="{{ route('registration_post',['raceYear' => 2023,'raceId' => 8]) }}">
    @csrf
  
 

    @if(count($eventList['event_list']) > 1)
      @include('registration.event_list_select',[
                                                  'eventList' => $eventList['event_list'],
                                                  'race_year' => $eventList['race_year'],
                                                  'race_id' => $eventList['race_id'],
                                                  'current_event_order' => $eventList['current_event']->poradi_podzavodu,
                                                  'race_name' => $raceName
                                                ])
                                                  
  @endif

  @include('registration.formtypes.type_'.$eventList['current_event']->registration_form_type,['countries' => $countries,'selects' => $selects,'event_age_range' => $eventAgeRange])
      

</form>
@endsection
