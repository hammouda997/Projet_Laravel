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
	<div class="card-header">Add etudiant</div>
	<div class="card-body">
		<form method="post" action="{{ route('etudiants.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">etudiant Name</label>
				<div class="col-sm-10">
					<input type="text" name="etudiant_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">etudiant Email</label>
				<div class="col-sm-10">
					<input type="text" name="etudiant_email" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">etudiant Gender</label>
				<div class="col-sm-10">
					<select name="etudiant_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">etudiant Image</label>
				<div class="col-sm-10">
					<input type="file" name="etudiant_image" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">classe</label>
				<div class="col-sm-10">
                            <select name="enseignant_id" class="form-control">
                                @foreach ($enseignant as $item)
                                <option value="{{ $item->id}}">{{ $item->classe}}</option>
                                @endforeach
                            </select>
							</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('main-content')
