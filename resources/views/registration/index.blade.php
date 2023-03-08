@extends('base')

@php
    $title = 'Registrace';
@endphp

@section('title', $title)

@section('h1', $title)

@section('container-type',"container")

@section('content')
    



<form>

  <div class="form-group">
  <label class="control-label" for="email">Email</label>
  <div class="input-group">
    <span class="input-group-text"><span class="fas fa-biking"></span></span>
    <input class="form-control" id="email" name="email" type="text"/>
  </div>




  <div class="form-group my-1">
  <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><span class="fas fa-biking"></span></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div>

</div>




</form>

<hr>





@endsection