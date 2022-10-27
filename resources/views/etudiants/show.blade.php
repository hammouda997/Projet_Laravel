
@extends('layouts.admin')

@section('main-content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>etudiant Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('etudiants.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>etudiant Name</b></label>
			<div class="col-sm-10">
				{{ $etudiant->etudiant_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>etudiant Email</b></label>
			<div class="col-sm-10">
				{{ $etudiant->etudiant_email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>etudiant Gender</b></label>
			<div class="col-sm-10">
				{{ $etudiant->etudiant_gender }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>etudiant Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $etudiant->etudiant_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Classe </b></label>
			<div class="col-sm-10">
				{{ $etudiant->enseignant->classe }}
			</div>
		</div>
	</div>
</div>


@endsection('main-content')
