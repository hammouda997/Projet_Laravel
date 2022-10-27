@extends('layouts.admin')

@section('main-content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><h1>Gestion Des Examen</h1></div>
			<div class="col col-md-6">
				<a href="{{ route('examens.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>DAte</th>
				<th>Durée</th>
				<th>Coef</th>
				<th>Module</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						
						<td>{{ $row->examen_name }}</td>
						
						<td>{{ $row->examen_date }}</td>
						<td>{{ $row->examen_durée }}</td>
						<td>{{ $row->examen_coef}}</td>
						<td>{{ $row->module->module_name}}</td>
						<td>
							<form method="post" action="{{ route('examens.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('examens.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('examens.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection