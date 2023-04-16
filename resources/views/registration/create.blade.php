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




@include('registration.submenu',['raceYear' => $raceYear,'raceId' => $raceId,'raceName' => $raceName]) 
  
  <form name="model" id="add-blog-post-form" method="post" action="{{ route('registration_post',['raceName' => $raceName,'raceYear' => $raceYear,'raceId' => $raceId]) }}">
    @csrf
    @if(count($eventList['event_list']) > 1)
        @include('registration.event_list_select',[
                                                  'eventList' => $eventList['event_list'],
                                                  'current_event_order' => $eventList['current_event']->poradi_podzavodu,
                                                  'race_name' => $raceName,
                                                  'race_year' => $raceYear,
                                                  'race_id' => $raceId,
                                                ])
    @endif
    
    @include('registration.formtypes.type_'.$eventList['current_event']->registration_form_type,['countries' => $countries,'selects' => $selects,'event_age_range' => $eventAgeRange])

</form>

@endsection
