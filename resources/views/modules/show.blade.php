@extends('layouts.admin')

@section('main-content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Module Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('modules.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Module Name</b></label>
			<div class="col-sm-10">
				{{ $module->module_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Module coef</b></label>
			<div class="col-sm-10">
				{{ $module->module_coef }}
			</div>
		</div>
		
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Module durée</b></label>
			<div class="col-sm-10">
				{{ $module->module_durée }}
			</div>
		</div>
	
	</div>
</div>

@endsection('content')
