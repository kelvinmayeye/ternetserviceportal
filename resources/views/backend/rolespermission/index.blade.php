@extends('backend.index')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Add Roles in Permission</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route("roles.permission.store") }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Role</label>
                                <select class="form-select" name="role" required>
                                    <option selected disabled>Open this select role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-12">
                                <h4>Select Permissions</h4>
                                <input class="form-check-input" type="checkbox" value="" id="checkDefaultmain">
                                <label class="form-check-label" for="checkDefaultmain">
                                    all permission
                                </label>

                                @foreach ($permissions as $permission)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" name="permission[]">
                                    <label class="form-check-label" for="">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#checkDefaultmain').click(function(){
            if($(this).is(':checked')){
                $('input[type=checkbox]').prop('checked',true);
            }else{
                $('input[type=checkbox]').prop('checked',false); 
            }
            });
    </script>
@endsection
