<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medicenter's Shopping Cart</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap1.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

    {{ Form::open(array('url'=>'approve-my-cart')) }}
            <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Shopping Cart</h4>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">
                            {{ Form::label('Choose Payment Method') }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::radio('payment_type','Bank 1') }}
                            &nbsp;
                            Bank 1
                            &nbsp;
                            {{ Form::radio('payment_type','Bank 2') }}
                            &nbsp;
                            Bank 2
                            &nbsp;
                            {{ Form::radio('payment_type','Bank 3') }}
                            &nbsp;
                            Bank 3
                        </div>

                        <div class="col-md-12">
                            &nbsp;
                        </div>

                        <div class="col-md-12">
                            {{ Form::label('Bank Referral Code') }}
                        </div>

                        <div class="col-md-5">
                            {{ Form::text('bank_referral_code',null,array('class'=>'form-control','placeholder'=>'Referral Code')) }}
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    {{ Form::submit('Confirm Order',array('class'=>'btn btn-primary')) }}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Not Yet</button>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
            <!-- Modal -->

    <br>

    <div class="pull-left">
        <big><big><big><img src="images/cart1.png" width=6%> Shopping Cart</big></big></big>
    </div>

    <div class="pull-right">
        <br>
        <a href="{{ URL::to('/') }}" style="text-decoration:none; color:#000">
            Home
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        @if(Auth::check())
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ URL::to('my-cart') }}" style="text-decoration:none; color:#000">My Cart</a>
        @endif
        &nbsp;&nbsp;&nbsp;&nbsp;
        @if(Auth::check())
            <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name }} | <a href="{{ URL::to('logout') }}" style="text-decoration:none; color:#000">Log Out</a>
        @else
            <a href="{{ URL::to('login') }}" style="text-decoration:none; color:#000">
                Log In/Sign Up
            </a>
        @endif
    </div>

    <br><br><br><br>

    <div class="row">

        <div class="col-md-8">
            <big><big><big>My Cart</big></big></big>

            <br><br>

            <table class="table">
                <tr>
                    <td>Item Name</td>
                    <td>Item Price </td>
                    <td>Item Quantity</td>
                    <td>Ordered At (YYYY-MM-DD)</td>
                </tr>

                @foreach($my_cart as $my_cart)
                    <tr>
                        <td><a href="{{ URL::to('remove-from-cart/'.$my_cart->id) }}" style="text-decoration:none;color:#000;"><small><span class="glyphicon glyphicon-remove"></span></a> {{ $my_cart->medicine_name }}</small></td>
                        <td>{{ $my_cart->medicine_price }}</td>
                        <td>{{ $my_cart->quantity }}</td>
                        <td>{{ $my_cart->created_at }}</td>
                    </tr>
                @endforeach

            </table>

            <br><br>

            <div class="pull-left">
                Total: {{ $my_cart_total }}
            </div>

            <div class="pull-right">
                <button type="button" class="btn btn-success" onClick="location.href='/medicine'">Continue Shopping</button> {{ Form::button('Confirm Order',array('class'=>'btn btn-primary','data-toggle'=>'modal','data-target'=>'#myModal')) }}
            </div>

        </div>

        <div class="col-md-4">
            <big><big><big>For Delivery</big></big></big>

            <br><br>

            <table class="table">
                <tr>
                    <td><small><small>Item Name</small></small></td>
                    <td><small><small>Item Price</small></small></td>

                </tr>

                @foreach($for_delivery as $for_delivery)
                    <tr>
                        <td><small>{{ $for_delivery->medicine_name }}</small></td>
                        <td>{{ $for_delivery->medicine_price }}</td>

                    </tr>
                @endforeach

            </table>

        </div>

    </div>

    <hr>

    <div class="pull-left">
        <small>
            Copyright &copy; MEDICNETER {{ Date('Y') }}
        </small>
    </div>


</div>


</body>
</html>