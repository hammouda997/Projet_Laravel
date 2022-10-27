@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header"><h1>Modifier un club<h1></div>
  <div class="card-body">
      
      <form action="{{ url('club/' .$clubs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$clubs->id}}" id="id" />
        <label>Nom Club</label></br>
        <input type="text" name="nomClub" id="nomClub" value="{{$clubs->nomClub}}" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$clubs->adresse}}" class="form-control"></br>
        <label>Nombre Participant</label></br>
        <input type="text" name="nbrpart" id="nbrpart" value="{{$clubs->nbrpart}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop