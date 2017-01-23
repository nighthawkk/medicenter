<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">




    <style>

        @font-face {
            font-family: myFirstFont;
            src: URL(sansation_light.woff);
        }

        div {
            font-family: myFirstFont;
        }
    </style>
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
            <a class="navbar-brand" href="/">
                <img class="img-rounded" src="images/logo1.jpg" alt="Brand">
            </a>
        </div>
        <div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li></li>
                    <li><a href="{{ URL('/') }}"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                    <li><a href="{{ URL('/about') }}">ABOUT US</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right ">
                    <li><a href="{{ URL('/services') }}">SERVICES</a></li>
                    <li><a href="{{ URL('/contact') }}"><span class="glyphicon glyphicon-earphone"></span> CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


@yield('content')
<script src="{{URL::asset('css/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('css/js/bootstrap.js')}}"></script>
</body>
</html>
