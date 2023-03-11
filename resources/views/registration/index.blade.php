@extends('base')

@php
    $title = 'Registrace';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')
    






<form>
  <div class="row mb-3">
    <label for="firstname" class="col-sm-2 col-form-label text-end">Jméno</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-user-large"></span></span>
        <input class="form-control" id="name" name="firstname" type="text"/>
      </div>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="lastname" class="col-sm-2 col-form-label text-end">Příjmení</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-user-large" style="width:1.2rem"></span></span>
        <input class="form-control" id="lastname" name="lastname" type="text"/>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="gender" class="col-sm-2 col-form-label text-end">Pohlaví</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-venus-mars" style="width:1.2rem"></span></span>
        <select class="form-select" id="gender" name="gender">
        <option selected>Vyberte</option>
          <option val="M">Muž</option>
          <option val="Z">Žena</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="birthyear" class="col-sm-2 col-form-label text-end">Ročník</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-calendar" style="width:1.2rem"></span></span>
        <select class="form-select" id="birthyear" name="birthyear">
        <option selected>Vyberte</option>
          <option>1961</option>
          <option>1933</option>
        </select>
      </div>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="contry" class="col-sm-2 col-form-label text-end">Stát</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
        <select class="form-select" id="country" name="country">
        <option selected>Vyberte</option>
        <option val="CZE">Česká republika</option>
        <option val="SVK">Slovenská republika</option>
          @foreach ($countries as $country)
             <option val="{{ $country->code }}">{{ $country->name }}</option>
          @endforeach
      </select>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="lastname" class="col-sm-2 col-form-label text-end">Telefon</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
        <input class="form-control" id="lastname" name="lastname" type="text"/>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="lastname" class="col-sm-2 col-form-label text-end">Telefon alternativní</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
        <input class="form-control" id="lastname" name="lastname" type="text"/>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="lastname" class="col-sm-2 col-form-label text-end">Email</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-envelope" style="width:1.2rem"></span></span>
        <input class="form-control" id="lastname" name="lastname" type="text"/>
      </div>
    </div>
  </div>

  @if($selects->count() > 0)
 @php
 
 @endphp

    @foreach ($selects as $select)
    
    <div class="row mb-3">
      <label for="contry" class="col-sm-2 col-form-label text-end">{{ $select['name'] }}</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
        <select class="form-select" id="country" name="country">
        <option selected>Vyberte</option>
      </select>
      </div>
    </div>
  </div>



    @endforeach

  @endif





</form>







@endsection