<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!--Fontawsome-->
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

    <title>Ternet Service Portal</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      
      <a class="navbar-brand" href="{{url('home')}}">Home</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('departments')}}">Departments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('users')}}">Users</a>
        </li>
        <li class="nav-item">
          <a href="{{url('statuses')}}" class="nav-link">Statuses</a>
        </li>
        <li class="nav-item">
          <a href="{{url('contacts')}}" class="nav-link">Contacts</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Subscribers</a>
        </li>
        
        @endauth
        <li class="nav-item">
          <a href="{{url('services')}}" class="nav-link">Services</a>
        </li>
        @guest
        <li class="nav-item">
          <a href="{{url('login')}}" class="nav-link">Login</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
        <form class="d-flex" action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn btn-outline-success" type="submit">logout</button>
      </form>
        </li>
        @endauth
      </ul>
      
      
    </div>
  </div>
</nav>
@include('backend.partials.message')
@yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
