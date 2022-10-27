@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('stuff/' .$stuffs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$stuffs->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$stuffs->nom}}" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$stuffs->prenom}}" class="form-control"></br>
        <label>Cin</label></br>
        <input type="text" name="cin" id="cin" value="{{$stuffs->cin}}" class="form-control"></br>
        
        <label>Club</label></br>

<select name="etablissement_id" class="form-control">
                        @foreach ($etablissement as $item)
                        <option value="{{ $item->id}}">{{ $item->nom}}</option>
                        @endforeach
                    </select>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop