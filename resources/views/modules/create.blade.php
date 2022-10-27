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
	<div class="card-header"><h1>Add module</h1>	</div>
	<div class="card-body">
		<form method="post" action="{{ route('modules.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Module Name</label>
				<div class="col-sm-10">
					<input type="text" name="module_name" class="form-control" />
				</div>
			</div>
			
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Durée</label>
				<div class="col-sm-10">
				<input type="int" name="module_durée" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> Coef</label>
				<div class="col-sm-10">
					<input type="int" name="module_coef" class="form-control"/>
				</div>
			</div>
			
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
