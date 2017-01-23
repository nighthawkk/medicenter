@extends('layouts.main')

@section('content')


    {{ Html::style('css/bootstrapmedical.css')}}
    {{ Html::style('https//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}
    {{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}
    {{ Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')}}

    {{ Html::style('css/font-awesome.css')}}
    {{ Html::style('css/font-awesome.min.css')}}

<title>MEDICENTER</title>

<div class="container">

   @if( \Session::has('message'))
       <br>
   <br>
   <br>
   <br>
   <br>
       <div class="alert alert-info">
           {{ \Session::get('message')}}
            </div>
    @endif
        <div style="margin-top:80px;" id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{URL::asset('images/3 steps2f.jpg')}}" alt="" width="1000" height="300">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="{{URL::asset('images/24-hrf.jpg')}}" alt="" width="1000" height="300">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="{{URL::asset('images/38 yrsf.jpg')}}" alt="" width="1000" height="300">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="{{URL::asset('images/showf.jpg')}}" alt="" width="1000" height="300">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- two columns of text below the carousel -->
    <hr style="border-color:#2B2525; margin-left:30%;margin-right:30%; margin-top:50px;">
    <center><h3>CHOOSE YOUR CATEGORY:-</h3></center>
    <hr style="border-color:#2B2525; margin-left:30%;margin-right:30%;">

    <div class="row">
        <div class="col-sm-4 ">
            <div style="position:relative; display:inline-block;" class="image">
                <img  class=" img-thumbnail" src="{{URL::asset('images/hos1.jpg')}}" alt="Retailer placeholder image" width="300" height="400"><button style="position:absolute;bottom:5px;
    right:6px;
    width:288px;
    height:40px;" type="button" class="btn btn-danger">
                    <a style="color:#FFFFFF" href="{{ URL('/retail/login') }}">Hospital and Retailer</a></button>
            </div><!-- /.col-lg-4 -->
        </div>
        <div class="col-sm-4 ">
            <div style="position:relative; display:inline-block;" class="image">
                <img  class="img-thumbnail" src="{{URL::asset('images/public2.jpg')}}" alt="Public placeholder image" width="300" height="400"><button style="position:absolute;bottom:5px;
    right:6px;
    width:288px;
    height:40px;" type="button" class="btn btn-danger">
                    <a style="color:#FFFFFF" href="{{URL::asset('/pub/signin')}}">Public</a></button>
            </div><!-- /.col-lg-4 -->
        </div>
        <div class="col-lg-4 ">
            <div style="position:relative; display:inline-block;" class="image">
                <img class="img-thumbnail" src="{{URL::asset('images/doc1.jpg')}}" alt="Hospital placeholder image" width="300" height="400"><button style="position:absolute;bottom:5px;
    right:6px;
    width:288px;
    height:40px;" type="button" class="btn btn-danger">
                    <a style="color:#FFFFFF" href="{{URL::asset('/doc/login')}}">Join As Doctor</a></button>

            </div><!-- /.col-lg-4 -->
        </div>
    </div>
    <hr style="border-color:#211F1F; width:75%;" >
    <div class="col-sm-3">
        <ul style="list-style:none">
            <h4 style="color:h4#B8D9D4">Related Links</h4>
            <li><a href="{{url('/terms')}}"><span class="glyphicon glyphicon-hand-right"></span> T & C</a></li>
            <li><a href="{{url('/faq')}}"><span class="glyphicon glyphicon-hand-right"></span> FAQ</a></li>
            <li><a href="{{url('/contact')}}"> <span class="glyphicon glyphicon-hand-right"></span> CONTACT US</a></li>
        </ul>
    </div>
    <div style="margin-left:55px;" class="row">
        <h4>Connect with us-:</h4>
      <span class="fa-stack">
 <a href="#"> <i style="margin-left:20px;" class="fa fa-circle-thin fa-stack-2x"></i>
     <a href="#"><i style="margin-left:20px;" class="fa fa-twitter fa-stack-1x"></i></a>
 </a>
 <a href="#"><i  style="margin-left:50px;" class="fa fa-facebook-square fa-stack-2x"></i></a>
 <a href="#"><i style="margin-left:80px; color:#EB2326;" class="fa fa-google-plus-square fa fa-stack-2x"></i></a>
 <a href="#"><i style="margin-left:110px; color:#332C2C;" class="fa fa-linkedin-square fa fa-stack-2x"></i></a>
 <a href="https://www.youtube.com/watch?v=YI_-xAfmI8U&feature=youtu.be" target="new"><i style="margin-left:140px; color:#332C2C;" class="fa-youtube-square fa fa-stack-2x"></i></a>
 </span></div>




@endsection