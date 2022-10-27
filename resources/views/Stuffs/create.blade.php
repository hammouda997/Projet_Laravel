@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Stuff Page</div>
  <div class="card-body">
      
      <form action="{{ url('stuff') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom"  class="form-control"></br>
        <label>Cin</label></br>
        <input type="number" name="cin" id="cin" class="form-control"></br>
        <label>Etablissement</label></br>

        <select name="etablissement_id" class="form-control">
                                @foreach ($etablissement as $item)
                                <option value="{{ $item->id}}">{{ $item->nom}}</option>
                                @endforeach
                            </select>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop