<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{ Html::style('/css/medicenter_ask_a_doctor.css')}}

    <title>Ask Doctor</title>
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
                            {{ \Auth::guard('pubs')->user()->first_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/pub/logout') }}"><i style="color: black;" class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
@if( \Session::has('message'))
    <div class="alert alert-info">
        {{ \Session::get('message')}}
    </div>
@endif

<form style="margin:100px;" class="form-horizontal" role="form" method="post" action="{{ url('/pub/ask_doctor')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label ">Question</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="Question"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-danger">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{Html::script('js/jquery-1.11.2.min.js')}}

{{Html::script('js/bootstrap.js')}}
</body>
</html>