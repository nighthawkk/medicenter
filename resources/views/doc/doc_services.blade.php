
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{ Html::style('/css/public_service.css')}}
    {{ Html::script('/js/bootstrap.min.js')}}
    {{Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js')}}
    {{Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}
    <title>Doctor Services </title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
    {{Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img class="img-rounded" src="/images/logo1.jpg" alt="Brand">
            </a>
        </div>
        <div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li></li>
                    <li><a href="{{url('/')}}"> <span class="glyphicon glyphicon-home" aria-hidden="true"> HOME</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right ">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ \Auth::guard('docs')->user()->first_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/doc/logout') }}"><i style="color: black;" class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>
    </div>
</nav>

<title>PUBLIC SERVICES</title>
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
<div style="margin-top:53px;">
    <img style="margin-left:0; margin-left:0px;" class="img-responsive" src="{{URL::asset('images/pubser2.jpg')}}" alt="Hospital placeholder image" width="1650" height="350">
</div>
<div style="margin:80px;">


    <dt style="font-size:24px;">WHAT WE OFFER:-</dt><br><dd style="font-style:oblique; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:20px;"><strong>We at medicenter know the basic need of healthcare. Hence we offer our services to public so as to make your access to medicines and other healthcare related services easier than ever.
            Register yourself to unlock number of features meant to make your healthcare easier and effective.</strong>
    </dd>
</div>
<div style="margin-top:80px; " class="row">
    <div class="col-md-3 col-md-offset-2">
        <div style="position:relative; display:inline-block;" class="image">
            <img  class="img-rounded img-responsive" src="{{URL::asset('images/ORDER1.jpg')}}"  data-placement="top" title="Order Now" alt="Order Now" width="300" height="400">
            <button style="position:absolute;bottom:0px;
    right:0px;
    width:300px;
    height:40px;" type="button" class="btn btn-danger"><a style="color:#FFFFFF" href="{{URL('/doc/order')}}">Order Now</a></button>
        </div>
    </div>
    <div  class="col-md-3 col-md-offset-2">
        <div style="position:relative; display:inline-block;" class="image">
            <img  class="img-rounded img-responsive" src="{{URL::asset('images/Appointment1.jpg')}}"  data-placement="top" title="Doctor Appointment" alt="Doctor Appointment" width="300" height="400"><button style="position:absolute;bottom:0px;
    right:0px;
    width:300px;
    height:40px;" type="button" class="btn btn-danger">
                <a style="color:#FFFFFF" href="#">Doctor Appointment</a></button>
        </div>
    </div>
</div>
<div style="margin-top:80px;" class="row">
    <div  class="col-md-3 col-md-offset-2">
        <div style="position:relative; display:inline-block;" class="image">
            <img class="img-rounded img-responsive" src="{{URL::asset('images/ASK1.jpg')}}"  data-placement="top" title=" Ask a Doctor" alt="Order Now" width="300" height="400"><button style="position:absolute;bottom:0px;
    right:0px;
    width:300px;
    height:40px;" type="button" class="btn btn-danger">
                <a style="color:#FFFFFF" href="#">Ask a Doctor</a></button>
        </div>
    </div>
    <div  class="col-md-3 col-md-offset-2">
        <div style="position:relative; display:inline-block;" class="image">
            <img class="img-rounded img-responsive" src="{{URL::asset('images/RETURN123.jpg')}}"  data-placement="top" title="Return" alt="Return" width="300" height="400"><button style="position:absolute;bottom:0px;
    right:0px;
    width:300px;
    height:40px;" type="button" class="btn btn-danger">
                <a style="color:#FFFFFF" href="#">Return</a></button>
        </div>
    </div>
</div>
<hr style="border-width:medium; border-color:#2D2828; margin:70px;">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('js/bootstrap.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/npm.js')}}"></script>
</body>
</html>