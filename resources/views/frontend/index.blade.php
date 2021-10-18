<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Service Portal</title>
  </head>
<body>
    <div class="container-fluid">
        <!-- include navbar -->
        @include('frontend.partials.nav')
      
        @yield('content')

     <!-- FOOTER -->
    <div class="row mt-5">
        <div class="col-md-4">
        <h3 class="one">ABOUT US</h3>
        <p class="one">TERNET is a network of Tanzania higher education and research institutions aiming at providing network infrastructure and associated services for enabling sharing of education and research resources inside and outside the country.</p>
        </div>
        <div class="col-md-5">
        <h3>QUICK LINKS</h3>
        <ul style="list-style-type: none;">
            <li>
                <a href="{{url('/')}}"> home</a>
             </li>
            <li>
                <a href="{{url('contacts')}}">contact us</a>
             </li>
            <li>
                <a href="{{route('servicehome')}}">service</a>
            </li>
        </ul>
    </div>
        <div class="col-md-3">
            <h3>SOCIAL NETWORKS</h3>
            <ul style="list-style-type: none;">
                <li>
                    <a href="https://www.facebook.com/" target="_blank"> facebook</a>
                </li>
                <li>
                    <a href="https://www.twitter.com/"  target="_blank">twitter</a>
                </li>
                <li>
                    <a href="https://www.Youtube.com/"  target="_blank">Youtube</a>
                </li>
                 <li>
                    <a href="https://www.Linkedin.com/"  target="_blank">Linkedin</a>
                </li>
            </ul>
        </div>
    </div>
    <!--END FOOTER -->
 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 </body>
 </html>