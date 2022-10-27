@extends('layouts.admin')

@section('main-content')
@if($message = Session::get('success'))


<div class="alert alert-success">
	{{ $message }}
</div>

@endif
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Gestion des matiéres</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/matiere/create') }}" class="btn btn-success btn-sm" title="Add New matiere">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code Mariere </th>
                                        <th>Nom Mariere</th>
                                        <th>Coefficient</th>
                                        <th>Cour</th>
                                        <th>Evaluation</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($matieres as $item)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->codeM }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->coff }}</td>
                                        <td>{{ $item->evaluation }}</td>

                                        <td>
                                            <a href="{{ url('/matiere/' . $item->id) }}" title="View matiere"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/matiere/' . $item->id . '/edit') }}" title="Edit matiere"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/matiere' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete matiere" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection