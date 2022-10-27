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
	<div class="card-header">Add Examen</div>
	<div class="card-body">
		<form method="post" action="{{ route('examens.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Examens Name</label>
				<div class="col-sm-10">
					<input type="text" name="examen_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Examens</label>
				<div class="col-sm-10">
					<input type="date" name="examen_date" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Durée</label>
				<div class="col-sm-10">
				<input type="int" name="examen_durée" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> coef</label>
				<div class="col-sm-10">
					<input type="int" name="examen_coef" class="form-control"/>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">module</label>
				<div class="col-sm-10">
                            <select name="module_id" class="form-control">
                                @foreach ($module as $item)
                                <option value="{{ $item->id}}">{{ $item->module_name}}</option>
                                @endforeach
                            </select>
							</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
