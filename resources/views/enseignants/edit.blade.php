@extends('layouts.admin')

@section('main-content')

<div class="card">
	<div class="card-header">Edit enseignant</div>
	<div class="card-body">
		<form method="post" action="{{ route('enseignants.update', $enseignant->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">enseignant Name</label>
				<div class="col-sm-10">
					<input type="text" name="enseignant_name" class="form-control" value="{{ $enseignant->enseignant_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">enseignant Email</label>
				<div class="col-sm-10">
					<input type="text" name="enseignant_email" class="form-control" value="{{ $enseignant->enseignant_email }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">classe</label>
				<div class="col-sm-10">
					<select name="classe" class="form-control">
						<option value="1ère année">1ère année</option>
						<option value="2ème année">2ème année</option>
						<option value="3ème année">3ème année</option>
						<option value="4ème année">4ème année</option>
						<option value="5ème année">5ème année</option>
						<option value="6ème année">6ème année</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">enseignant Image</label>
				<div class="col-sm-10">
					<input type="file" name="enseignant_image" />
					<br />
					<img src="{{ asset('images/' . $enseignant->enseignant_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_enseignant_image" value="{{ $enseignant->enseignant_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $enseignant->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>
document.getElementsByName('enseignant_gender')[0].value = "{{ $enseignant->enseignant_gender }}";
</script>

@endsection('main-content')