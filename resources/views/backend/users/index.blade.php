@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Users</h2>
                    <a href="{{ url('users/create') }}" class="btn btn-primary float-right">Add User</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->department->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('users/' . $user->id) }}">Show</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('users/' . $user->id . '/edit') }}">Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#deleteUserModal{{ $user->id}}">
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @include('backend.modals.delete_user')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @stop
