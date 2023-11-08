   <div class="col-md-4 mt-3">
      <div class="card h-100">
         <img src="{{asset($service->image)}}" alt="" height="250" width="350">
         <div class="card-body m-2">
            <h4 class="card-title">
               <a href="{{url('showservices/'.$service->id.'/showservices')}}" class="text-muted"><b>{{$service->name}}</b></a>
            </h4>
            <h5 class="card-text text-muted"><b>{{Str::words($service->description,10,'..')}}</b></h5>
            </div>
         </div>
      </div>