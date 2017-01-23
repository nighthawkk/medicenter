<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="img-rounded" src="/images/logo1.jpg" alt="Brand">
            </a>
        </div>
        <div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li></li>
                    <li><a href="{{ url('/') }}"> <span class="glyphicon glyphicon-home" aria-hidden="true"> HOME</span></a></li>
                    <li><a href="{{ url('/about') }}"><span>ABOUT US</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right ">
                    @if (Auth::guest())
                        <li><a href="{{ url('/doc/login') }}">Login</a></li>
                        <li><a href="{{ url('/doc/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </div>
</nav>
@yield('content')
<script src="{{URL::asset('/js/jquery-1.11.2.min.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{URL::asset('/js/bootstrap.js')}}"></script>
</body>
</html>