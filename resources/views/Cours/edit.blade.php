@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('cour/' .$cours->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cours->id}}" id="id" />
        <label>Code Cour</label></br>
        <input type="text" name="code" id="code" value="{{$cours->code}}" class="form-control"></br>
        <label>Nom Cour</label></br>
        <input type="text" name="nom" id="nom" value="{{$cours->nom}}" class="form-control"></br>
        <label>Duree</label></br>
        <input type="text" name="duree" id="duree" value="{{$cours->duree}}" class="form-control"></br>
        <label>file</label></br>
        <input type="text" name="file" id="file" value="{{$cours->file}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop