<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Medicenter</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">

    <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Medicenter
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/doc/doc_services') }}">services</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guard('docs')->guest())
                    <li><a href="{{ url('/doc/login') }}">Login</a></li>
                    <li><a href="{{ url('/doc/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ \Auth::guard('docs')->user()->first_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/doc/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Medicines..</div>

                <div class="panel-body">
                    BUY MEDICINES.
                    {{Form::open(array('id'=>"myform",'files'=>true))}}
                    <div class="form-group">
                        <label for="">Medicine Name</label>
                        <select class="formcontrol input-sm" name="medicine" id="medicine">
                            @foreach($medicines as $medicine)
                                <option selected disabled hidden value=''>-- select an option --</option>
                                <option value="{{$medicine->id}}">{{$medicine->NAME}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Company</label>
                        <select class="formcontrol input-sm" name="company" id="company">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <select class="formcontrol input-sm" name="price" id="price">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pieces</label>
                        <select class="formcontrol input-sm" name="pieces" id="pieces">
                            <option value=""></option>
                        </select>
                        <label for="">Type</label>
                        <select class="formcontrol input-sm" name="type" id="type">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="formcontrol input-sm">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="">
                    </div>



                    {{ Form::submit('Add To Cart',array('class'=>'btn btn-success')) }}





                    {{Form::close()}}


                </div>
                <script>
                    $('#medicine').on('change',function(e){
                        console.log(e);

                        var med_id = e.target.value;



                        $.get('/ajax-cat?med_id=' + med_id, function(data){
                            $('#company').empty();
                            $('#price').empty();
                            $('#pieces').empty();
                            $('#type').empty();
                            $.each(data, function(index, subcatObj){
                                $('#company').append('<option value="'+subcatObj.id+'">'+subcatObj.COMPANY+'</option');
                                $('#price').append('<option value="'+subcatObj.id+'">'+subcatObj.PRICE+'</option');
                                $('#pieces').append('<option value="'+subcatObj.id+'">'+subcatObj.QUANTITY+'</option');
                                $('#type').append('<option value="'+subcatObj.id+'">'+subcatObj.TYPE+'</option');
                                $("#myform").attr('action', '/doc/add-to-cart/'+subcatObj.id );

                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>





        <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
