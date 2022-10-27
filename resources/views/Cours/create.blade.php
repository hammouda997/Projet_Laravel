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
  <div class="card-header"><h1>Gestion des cours<h1></div>
  <div class="card-body">
      
      <form action="{{ url('cour') }}" method="post">
        {!! csrf_field() !!}
        <label>code Cour</label></br>
        <input type="text" name="code" id="code" class="form-control"></br>
        <label>Nom Cour</label></br>
        <input type="text" name="nom" id="nom"  class="form-control"></br>
        <label>Durée</label></br>
        <input type="text" name="duree" id="duree" class="form-control"></br>
        <label>File</label></br>
        <input type="text" name="file" id="file" class="form-control"></br>
        <label>Matiere</label></br>
        <select name="matiere_id" class="form-control">
                        @foreach ($matiere as $item)
                        <option value="{{ $item->id}}">{{ $item->nom}}</option>
                        @endforeach
                    </select>
                    </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop