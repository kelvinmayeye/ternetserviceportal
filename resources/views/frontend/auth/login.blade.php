@extends('frontend.index')
@section('content')
 <div id="hero-div">
  		<img src="{{asset('storage/services/picha.jpg')}}" height="10%" alt="Snow" style="width:100%;">
  		<div id="centered">Login</div>
	</div>
</div>

  <div class="container">
    <form action="{{route('login')}}" method="POST">
              @csrf
       <div class="container">
        <div class="row mt-5">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="form-group row mb-1">
             <label for="email" class="col-sm-2 col-form-label col-form-label-lg"></label>
              <div class="col-sm-12">
                <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label col-form-label-lg"></label>
              <div class="col-sm-12">
                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">LOG IN</button>
          </div>
        </form>
        </div>
@stop