@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Add Users</h2>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('users') }}" class="form-control">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Fullname:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Fullname">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                <select class="form-select" aria-label="Default select example" name="department_id">
                                    <option selected disabled>Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Roles</label>
                                <select class="form-select" aria-label="Default select example" name="role">
                                    <option selected disabled>Select Roles</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
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
