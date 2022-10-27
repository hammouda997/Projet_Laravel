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
			<div class="col col-md-6"><h2>Gestion Des Modules</h2></div>
			<div class="col col-md-6">
				<a href="{{ route('modules.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Durée</th>
				<th>Coef</th>
				
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						
						<td>{{ $row->module_name }}</td>
						<td>{{ $row->module_durée }}</td>
						<td>{{ $row->module_coef}}</td>
						
						<td>
							<form method="post" action="{{ route('modules.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('modules.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('modules.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
