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
  <div class="card-header"><h1>Ajouter une matiére<h1></div>
  <div class="card-body">
      
      <form action="{{ url('matiere') }}" method="post">
        {!! csrf_field() !!}
        <label>Code matiére </label></br>
        <input type="text" name="codeM" id="codeM" class="form-control"></br>
        <label>Nom matiére</label></br>
        <input type="text" name="nom" id="nom"  class="form-control"></br>
        <label>Coefficient</label></br>
        <input type="text" name="coff" id="coff" class="form-control"></br>
        <label>Type d'Evaluation</label></br>
        <input type="text" name="evaluation" id="evaluation" class="form-control"></br>
    
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop