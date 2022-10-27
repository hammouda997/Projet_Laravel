@extends('layouts.admin')

@section('main-content')

<div class="card">
	<div class="card-header">Edit examens</div>
	<div class="card-body">
		<form method="post" action="{{ route('examens.update', $examen->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Examens Name</label>
				<div class="col-sm-10">
					<input type="text" name="examen_name" class="form-control" value="{{ $examen->examen_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Examens</label>
				<div class="col-sm-10">
					<input type="date" name="examen_date" class="form-control" value="{{ $examen->examen_date }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Durée</label>
				<div class="col-sm-10">
					<input type="int" name="examen_durée" class="form-control" value="{{ $examen->examen_durée }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> coef</label>
				<div class="col-sm-10">
					<input type="int" name="examen_coef" class="form-control" value="{{ $examen->examen_coef }}"/>
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $examen->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
			
		</form>
	</div>
</div>


@endsection('content')