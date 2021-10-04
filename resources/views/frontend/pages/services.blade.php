@extends('frontend.index')
@section('content')
<div id="hero-div">
  		<img src="{{asset('storage/services/servc.jpg')}}" height="10%" alt="Snow" style="width:100%;">
  		<div id="centered">Service</div>
	</div>
</div>

      <div class="container">
          <div class="row mt-5">
            @foreach ($services as $service)
            @include('frontend.partials.service',['service'=>$service]) 
            @endforeach
          </div>

          <div class="row my-5 ">
            <div class="col-md-4"></div>
               <div class="col-md-4">
                 {{$services->links()}}
               </div>
      
@stop