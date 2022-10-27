@extends('layouts.admin')

@section('main-content')


<div class="card">
	<div class="card-header">Edit etudiant</div>
	<div class="card-body">
		<form method="post" action="{{ route('etudiants.update', $etudiant->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">etudiant Name</label>
				<div class="col-sm-10">
					<input type="text" name="etudiant_name" class="form-control" value="{{ $etudiant->etudiant_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">etudiant Email</label>
				<div class="col-sm-10">
					<input type="text" name="etudiant_email" class="form-control" value="{{ $etudiant->etudiant_email }}" />
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
					<br />
					<img src="{{ asset('images/' . $etudiant->etudiant_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_etudiant_image" value="{{ $etudiant->etudiant_image }}" />
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
							</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $etudiant->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>
document.getElementsByName('etudiant_gender')[0].value = "{{ $etudiant->etudiant_gender }}";
</script>

@endsection('main-content)