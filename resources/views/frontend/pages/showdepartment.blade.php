@extends('frontend.index')
@section('content')
<!-- <div class="row"> 
        <div class="col-md-12"> 
            <div class="jumbotron text-center text-white" style="background-image: url(storage/services/picha.jpg);">
               <a href=""><h1 class="display-3 mt-120 text-white"><b>Service name</b></h1></a> 
              </div>
         </div>
     </div> -->

     <div id="hero-div">
  		<img src="{{asset('storage/services/servc.jpg')}}" height="10%" alt="Snow" style="width:100%;">
      
  		<div id="centered">Department Name</div>
      
	</div>
</div>
<div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <h2>RELATED SERVICES</h2>
        </div>
      </div>

      
            <div class="row mt-5">
            
            <div class="col-md-4 mt-3">
              <div class="card h-100">
               <img src="{{asset('storage/services/servc.jpg')}}" alt="" height="250" width="350">
                <div class="card-body m-2">
                <h4 class="card-title">
                 <a href="" class="text-muted"><b>service name</b></a></h4>
                  <h5 class="card-text text-muted"><b>Description of service</b></h5>
               </div>
            </div>
          </div>
             
                 
            </div> 
            
@stop