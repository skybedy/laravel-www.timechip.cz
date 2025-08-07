@extends('base')

@php
    $title = 'Seznam registrací';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')

@include('registration.submenu',['raceYear' => $raceYear,'raceId' => $raceId,'raceName' => $raceName]) 

@php


$str = "";

for($i = 1;$i <= 4;$i++)
{

    $k = 1;
    $tr = false;
    foreach ($registrations as $registration)
    {
         if($registration->poradi_podzavodu == $i)
         {
            $tr .= '<tr><td class="w-25 align-middle">'.$registration->prijmeni_1.' '.$registration->jmeno_1.'</td><td class="w-25  align-middle">'.$registration->prislusnost.'</td><td class="w-25  align-middle">'.$registration->nazev_k.'</td><td class="w-25  align-middle text-end">'.$registration->zaplaceno.'</td></tr>';
         }
    }
        if($tr)
            {
               // $str .=  '<h3 class="h5">'.$eventList['event_list']->firstWhere('poradi_podzavodu', $i)->nazev.'</h3>';
                $str .= '<table class="table table-sm table-hover table-striped mb-5">';
                $str .= $tr;
                $str .= '</table>';
                $k++;
            }


}

echo $str;
@endphp
@endsection
