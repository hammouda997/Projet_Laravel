@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header"><h2>Modifier une établissement</h2></div>
  <div class="card-body">
      
      <form action="{{ url('etablissement/' .$etablissements->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$etablissements->id}}" id="id" />
        <label>Nom Club</label></br>
        <input type="text" name="nom" id="nom" value="{{$etablissements->nom}}" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$etablissements->adresse}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop