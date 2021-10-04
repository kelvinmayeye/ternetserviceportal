@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
            <h2>Ternet Service</h2>
            <a href="{{url('servicescreate')}}" class="btn btn-danger m-3">Add service</a>
        </div>
         <div class="card-body">
         <table class="table table-bordered">
     <thead>
         <tr>
             <th>Name</th>
             <th>Description</th>
             <th>Status</th>
             <th>Department</th>
             <th>Action</th>
         </tr>
     </thead>
     <tbody>
     @foreach ($service as $service)
         <tr>
             <td>{{$service->name}}</td>
             <td>{{$service->description}}</td>
             <td>{{$service->status->name}}</td>
             <td>{{$service->department->name}}</td>
             <td>
                 <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item"
     href="{{url('servicesshow/'.$service->id.'/show')}}">Show</a></li>
    <li><a class="dropdown-item" href="{{url('services/'.$service->id.'/edit')}}">Edit</a></li>
  </ul>
</div>
             </td>
         </tr>
         @endforeach
     </tbody>
    </table>
         
</div>

</div>

@stop