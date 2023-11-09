@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Permissions</h2>
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add Permission</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Permission</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td> </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('permissions.show', $permission->id) }}">Add role</a></li>
                                                <li>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#deletePermissionModal{{ $permission->id }}">
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @include('backend.modals.delete_permission')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
