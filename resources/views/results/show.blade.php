@extends('base')

@php
    $title = 'Výsledky';
    $containerType = "container-fluid";
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',$containerType)


@section('content')
<div class="row mb-2">
    <div class="col">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Startovní číslo, nebo příjmení" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">Vyhledávání</span>
        </div>
    </div>
</div>



<div class="row mb-2">
    @if(is_array($subEventList))
        <div class="col">
            <select class="form-select" aria-label="Default select example">
            @foreach ($subEventList as $subEvent)
                <option value="{{ $subEvent->poradi_podzavodu }}">{{ $subEvent->nazev_podzavodu }}</option>
            @endforeach
            </select>
        </div>
    @endif

    <div class="col">
        <select class="form-select" aria-label="Default select example">
                <option value="all">Absolutně</option>    
                <option value="w">Ženy</option>
                <option value="m">Muži</option>    
    
        @foreach ($categoryList as $category)
                <option value="{{ $category->category_order }}">{{ $category->category_name }}</option>
            @endforeach  
        </select>
    </div>
</div>






<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
        @foreach ($results['columns'] as $column)
            <th class="text-{{ $column->column_align }}">{{ $column->column_name }}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach ($results['lines'] as $line)
        <tr>
        @foreach ($results['columns'] as $column)
            <td class="text-{{ $column->column_align }}">{{ $line->{$column->variable_name}  }}</td>
        @endforeach
        </tr>
    @endforeach 
    </tbody>







</table>            


@endsection