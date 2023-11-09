@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Statuses</h2>
                    <a href="{{ url('statuses/create') }}" class="btn btn-primary float-right">Add Status</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($statuses as $status)
                                <tr>
                                    <td>{{ $status->name }}</td>
                                    <td>{{ $status->created_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ url('statuses', $status->id) }}">Show</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('statuses/' . $status->id . '/edit') }}">Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#deleteStatusModal{{ $status->id }}">
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @include('backend.modals.delete_status')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @stop
