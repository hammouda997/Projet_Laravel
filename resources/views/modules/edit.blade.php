@extends('layouts.admin')

@section('main-content')
<div class="card">
	<div class="card-header"><h2>Edit module</h2></div>
	<div class="card-body">
		<form method="post" action="{{ route('modules.update', $module->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Module Name</label>
				<div class="col-sm-10">
					<input type="text" name="module_name" class="form-control" value="{{ $module->module_name }}" />
				</div>
			</div>
			
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Durée</label>
				<div class="col-sm-10">
					<input type="int" name="module_durée" class="form-control" value="{{ $module->module_durée }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> coef</label>
				<div class="col-sm-10">
					<input type="int" name="module_coef" class="form-control" value="{{ $module->module_coef }}"/>
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $module->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
			
		</form>
	</div>
</div>


@endsection('content')