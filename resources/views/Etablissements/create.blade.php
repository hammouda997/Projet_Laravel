@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header"><h2>Ajouter une établissement</h2></div>
  <div class="card-body">
      
      <form action="{{ url('etablissement') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom </label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>adresse</label></br>
        <input type="text" name="adresse" id="adresse"  class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop