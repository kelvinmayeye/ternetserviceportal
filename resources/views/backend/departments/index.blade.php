@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
            <h2>Departments</h2>
            <a href="{{url('departments/create')}}" class="btn btn-primary float-right">Add Department</a>
        </div>
         <div class="card-body">
    <table class="table table-bordered">
     <thead>
         <tr>
             <th>Name</th>
             <th>Date</th>
             <th>Action</th>
         </tr>
     </thead>

     <tbody>
         @foreach ($departments as $department)
         <tr>
             <td>{{$department->name}}</td>
             <td>{{$department->created_at}}</td>
             <td>
                 <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item"
     href="{{url('departments',$department->id)}}">Show</a></li>
    <li><a class="dropdown-item"
 href="{{url('departments/'.$department->id.'/edit')}}">Edit</a></li>
  </ul>
</div>

             </td>
         </tr>
         @endforeach
     </tbody>
    </table>
  </div>
</div>

</div>
@stop