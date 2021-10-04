@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
            <h2>{{$service->name}} Service Details</h2>
            
        </div>
         <div class="card-body">
         <img src="{{$service->image }}" class="card-img-top" alt="No image" width="auto" height="500">

         <h5 class="card-title mt-4">{{$service->name}}</h5>

         <p class="card-text">{{$service->description}}.</p>


              <a href="#" class="card-link">{{$service->department->name}}</a>
              <a href="#" class="card-link">{{$service->status->name}}</a>

              <div class="col-12">
                <a href="{{url('services')}}" class="btn btn-danger m-3">Cancel</a>
             </div>
         
    </div>
    
  </div>
</div>

</div>
@stop