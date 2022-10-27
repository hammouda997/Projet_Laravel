@extends('layouts.admin')

@section('main-content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Examen Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('examens.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Examens Name</b></label>
			<div class="col-sm-10">
				{{ $examen->examen_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Examen Coef</b></label>
			<div class="col-sm-10">
				{{ $examen->examen_coef }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Examen duration</b></label>
			<div class="col-sm-10">
				{{ $examen->examen_durée }}
			</div>
		</div>
	
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Module </b></label>
			<div class="col-sm-10">
				{{ $examen->module->module_name }}
			</div>
		</div>
	</div>
</div>

@endsection('content')
