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
                        <h2>Gestion des evenements</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/evenment/create') }}" class="btn btn-success btn-sm" title="Add New Evenment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Date début</th>
                                     
                                        <th>Club</th>
                                        <th>Duree</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($evenments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->date_deb }}</td>
                                        <td>{{ $item->clubs->nomClub }}</td>
                                        <td>{{ $item->duree }}</td>

                                        <td>
                                            <a href="{{ url('/evenment/' . $item->id) }}" title="View Evenment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/evenment/' . $item->id . '/edit') }}" title="Edit Evenment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/evenment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Evenment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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