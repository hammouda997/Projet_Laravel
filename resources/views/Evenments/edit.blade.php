@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header"><h1>Modifier un évenement<h1></div>
  <div class="card-body">
      
      <form action="{{ url('evenment/' .$evenments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$evenments->id}}" id="id" />
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$evenments->description}}" class="form-control"></br>
        <label>Date début</label></br>
        <input type="text" name="date_deb" id="date_deb" value="{{$evenments->date_deb}}" class="form-control"></br>
        <label>Duree</label></br>
        <input type="text" name="duree" id="duree" value="{{$evenments->duree}}" class="form-control"></br>
        <label>Club</label></br>

<select name="club_id" class="form-control">
                        @foreach ($club as $item)
                        <option value="{{ $item->id}}">{{ $item->nomClub}}</option>
                        @endforeach
                    </select>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop