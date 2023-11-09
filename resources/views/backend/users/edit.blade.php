@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Edit User</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $users->id) }}" class="form-control">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ $users->name }}" class="form-control">
                            </div>

                            <div class="col">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ $users->email }}" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                              <label class="form-label">Department</label>
                                <select class="form-control" name="department_id" aria-label=".form-select-sm">
                                    <option value="{{ $users->department_id }}" selected>{{ $users->department->name }}
                                    </option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <a href="{{ url('users') }}" class="btn btn-danger m-3">Cancel</a>
                        <button class="btn btn-primary m-3" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
