@extends('layout.layout')

@section('content')

<h1>Modifier adhérant</h1>

<form method="POST" action="/adherant/update/{{$adherant->id}}">
  {{csrf_field()}}
  {{method_field('PUT')}}
  <div class="form-group col-md-4">
    <label for="first_name">Nom de l'adhérant</label>
    <input type="text" class="form-control" id="first_name" name="first_name" value= "{{$adherant->first_name}}">  
  </div>

  <div class="form-group col-md-4">
    <label for="last_name">Prénom de l'adhérant</label>
    <input type="text" class="form-control" id="last_name" name="last_name" value= "{{$adherant->last_name}}">
  </div>

  <div class="form-group col-md-4">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value= "{{$adherant->email}}">
  </div>

  <div class="form-group col-md-4">
    <label for="licence_number">N° licence</label>
    <input type="number" class="form-control" id="licence_number" name="licence_number" value= "{{$adherant->licence_number}}">
  </div>    

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@include('layouts.form_errors')

@endsection