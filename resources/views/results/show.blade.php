@extends('base')

@php
    $title = 'Výsledky';
    $containerType = "container-fluid";
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',$containerType)


@section('content')


<table class="table table-striped table-bordered table-hover">';
    <thead>
        <tr>
        @foreach ($results['columns'] as $column)
            <th class="text-{{ $column['column_align'] }}">{{ $column['column_name'] }}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach ($results['lines'] as $line)
        <tr>
        @foreach ($results['columns'] as $column)
            <td class="text-{{ $column['column_align'] }}">{{ $line[$column['variable_name']] }}</td>
        @endforeach
        </tr>
    @endforeach 
    </tbody>


</table>            


@endsection