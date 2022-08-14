@extends('backend.index')
@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Our Contacts</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Received Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contacts)
                                <tr>
                                    <td>{{ $contacts->name }}</td>
                                    <td>{{ $contacts->email }}</td>
                                    <td>{{ $contacts->subject }}</td>
                                    <td>{{ $contacts->message }}</td>
                                    <td>{{ date('d-M-Y', strtotime($contacts->created_at)) }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#DeleteModal">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="">Warning</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <a href="{{url('delete/'.$contacts->id)}}"><button type="button"
                                                            class="btn btn-danger">Yes</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        @stop
