@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h2>Add Permission</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-sm-2">Permission</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control"
                                placeholder="Role name">
                            <a href="{{ route('permissions.index') }}" class="btn btn-danger mt-3">Cancel</a>
                            <button class="btn btn-primary mt-3" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection