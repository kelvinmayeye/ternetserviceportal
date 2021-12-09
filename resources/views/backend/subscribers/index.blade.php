@extends('backend.index')
@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
            <h2>Subscribers</h2>
        </div>
         <div class="card-body">
         <table class="table table-bordered">
     <thead>
         <tr>
             
             <th>Email</th>
             
             <th>Action</th>
         </tr>
     </thead>
     <tbody>
     @foreach($newssubscribers as $newssubscribers)
         <tr>
             
             <td>{{$newssubscribers->email}}</td>
             <td>
                <div class="btn-group">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal">
  Delete
</button>
                </div>
             </td>
         </tr>
         @endforeach
     </tbody>
    </table>
         
</div>

</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Warning</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href = 'subdelete/{{$newssubscribers->id}}'><button type="button" class="btn btn-success"><i class="fa fa-trash" aria-hidden="true" style="font-size: 20px;"></i></button></a>
      </div>
    </div>
  </div>
</div>


@stop