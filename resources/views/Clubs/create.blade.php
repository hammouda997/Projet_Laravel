@extends('layouts.admin')

@section('main-content')
@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
  </ul>
</div>

@endif
<div class="card">
  <div class="card-header">Ajouter un club</div>
  <div class="card-body">
      
      <form action="{{ url('club') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom Club</label></br>
        <input type="text" name="nomClub" id="nomClub" class="form-control"></br>
        <label>adresse</label></br>
        <input type="text" name="adresse" id="adresse"  class="form-control"></br>
        <label>Nombre participants</label></br>
        <input type="text" name="nbrpart" id="nbrpart" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop