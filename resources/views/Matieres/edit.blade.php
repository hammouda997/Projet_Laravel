@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header"><h2>Modifier matiére<h2></div>
  <div class="card-body">
      
      <form action="{{ url('matiere/' .$matieres->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$matieres->id}}" id="id" />
        <label>Code Mariere</label></br>
        <input type="text" name="codeM" id="codeM" value="{{$matieres->codeM}}" class="form-control"></br>
        <label>Nom Mariere</label></br>
        <input type="text" name="nom" id="nom" value="{{$matieres->nom}}" class="form-control"></br>
        <label>Coefficient</label></br>
        <input type="text" name="coff" id="coff" value="{{$matieres->coff}}" class="form-control"></br>
        <label>Evaluation</label></br>
        <input type="text" name="evaluation" id="evaluation" value="{{$matieres->evaluation}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop