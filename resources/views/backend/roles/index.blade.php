@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Statuses</h2>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary">Add Role</a>

                    <a href="{{ route('roles.permission') }}" class="btn btn-primary mx-5">+ Role in Permission</a>

                    <a href="{{ route('permissions.index') }}" class="btn btn-primary mx-5">Permission</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Permission</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach ($role->permissions as $permission)
                                        <span class="badge rounded-pill bg-info text-dark">{{ $permission->name }}</span> &nbsp;
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('roles.show', $role->id) }}">Show</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('roles.edit', $role->id) }}">Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#deleteRoleModal{{ $role->id }}">
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @include('backend.modals.delete_role')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
