@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $permission->name }}Permission</h2>
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add Permission</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            @foreach ($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  {{ $role->name }}
                                </label>
                              </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
