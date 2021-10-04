@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="card-header">
            <h2>Add Departments</h2>
            
        </div>
         <div class="card-body">
    <form action="{{url('departments')}}" method="POST">
      @csrf
    <div class="form-group">
    <label class="control-label col-sm-2">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Add Name">
      
      
      <a href="{{url('departments')}}" class="btn btn-danger mt-3">Cancel</a>
      <button class="btn btn-primary mt-3" type="submit">Save</button>
    
    </div>
  </div>
    </form>
  </div>
</div>

</div>
@stop