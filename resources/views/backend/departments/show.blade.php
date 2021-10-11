@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
   
        <div class="card-header">
            <h2>{{$department->name}} Users</h2>
            
        </div>
         <div class="card-body">
    <ul>
        @foreach($department->users as $user)
        <li>{{$user->name}}</li>
        @endforeach
</ul>
  </div>
</div>

</div>
@stop