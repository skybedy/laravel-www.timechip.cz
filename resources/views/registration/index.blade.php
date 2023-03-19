@extends('base')

@php
    $title = 'Registrace';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')
    
  @if(count($eventList['event_list']) > 1)
      @include('registration.event_list_select',[
                                                  'eventList' => $eventList['event_list'],
                                                  'race_year' => $eventList['race_year'],
                                                  'race_id' => $eventList['race_id'],
                                                  'current_event_order' => $eventList['current_event']->poradi_podzavodu
                                                ])
                                                  
  @endif

  @include('registration.formtypes.type_'.$eventList['current_event']->registration_form_type,['countries' => $countries,'selects' => $selects,'event_age_range' => $eventAgeRange])

@endsection
