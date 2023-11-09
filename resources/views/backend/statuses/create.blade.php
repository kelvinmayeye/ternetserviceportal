@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Add Status</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('statuses') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2">Status Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="email"
                                    placeholder="status name">
                                <a href="{{ url('statuses') }}" class="btn btn-danger mt-3">Cancel</a>
                                <button class="btn btn-primary mt-3" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @stop
