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
  <div class="card-header">Evenments Page</div>
  <div class="card-body">
      
      <form action="{{ url('evenment') }}" method="post">
        {!! csrf_field() !!}
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Date début</label></br>
        <input type="date" name="date_deb" id="date_deb"  class="form-control"></br>
    
        <label>Duree</label></br>
        <input type="text" name="duree" id="duree" class="form-control"></br>
        <label>Club</label></br>

        <select name="club_id" class="form-control">
                                @foreach ($club as $item)
                                <option value="{{ $item->id}}">{{ $item->nomClub}}</option>
                                @endforeach
                            </select>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop