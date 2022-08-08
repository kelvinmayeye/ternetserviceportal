        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item hover">
                    <img src="{{asset('storage/services/logo.png')}}" alt="photo" height="50" width="50" class="mr-2">
                <li class="nav-item hover">
                  <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('servicehome')}}">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('contacts')}}">Contact us</a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="{{url('login')}}">Login</a></li>
              </ul>
            </div>
          </nav>
