
@extends('layouts.admin')

@section('main-content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>enseignant Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('enseignants.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>enseignant Name</b></label>
			<div class="col-sm-10">
				{{ $enseignant->enseignant_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>enseignant Email</b></label>
			<div class="col-sm-10">
				{{ $enseignant->enseignant_email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>classe</b></label>
			<div class="col-sm-10">
				{{ $enseignant->classe }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>enseignant Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $enseignant->enseignant_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('main-content')
