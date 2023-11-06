@extends('frontend.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center text-white" style="background-image: url(storage/services/picha.jpg);">
                <a href="">
                    <h1 class="display-3 mt-120 text-white"><b>Contact Us</b></h1>
                </a>
            </div>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Received</strong> {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


            <form action="{{ url('contacts') }}" method="POST">
                @csrf
                <h3>For more information, Contact us through this form</h3>
                <div class="row" height="50">
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Name">
                    </div>
                    <div class="col">
                        <input type="text" name="email" class="form-control form-control-lg" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress"></label>
                    <input type="text" name="subject" class="form-control form-control-lg" id="inputAddress"
                        placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="message"></label>
                    <textarea class="form-control form-control-lg" name="message" placeholder="Message" id="message" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=95062%20University%20of%20Dar%20es%20salaam,%20Tanzania&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://yt2.org"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 100%;
                        }
                    </style><a href="https://www.embedgooglemap.net"></a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
    @stop
