@extends('layouts.app')

@section('content')

    <div style="margin-top:53px;">
        <img style="margin:0px;" class="img-responsive" src="/images/sign_up.jpg" alt="sign up placeholder image" width="1600" height="300">
    </div>
    <div class="container">
        <div style="margin-top:80px;"  class="jumbotron">
            <form action="{{ url('/retail/register') }}" method="post" class="form" role="form">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-4" {{ $errors->has('username') ? ' has-error' : '' }}>
                        <label for="inputFirstname" class="sr-only">Firstname</label>
                        <input type="text" name="first_name" id="inputFirstname" class="form-control" placeholder="Firstname" required autofocus>
                    </div>
                    @if ($errors->has('username'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                    @endif

                    <div class=" col-md-4 col-md-offset-4 ">
                        <label for="inputlastname" class="sr-only">Lastname</label>
                        <input type="text" name="last_name" id="inpuLastname" class="form-control" placeholder="Lastname" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4">
                        <label for="inputFirmname" class="sr-only">Firmname</label>
                        <input type="text" name="firm_name" id="Firmname" class="form-control" placeholder="FirmName" required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label for="Licenceno" class="sr-only">Licence No.</label>
                        <input type="text" name="licence_number" id="licenceno" class="form-control" placeholder="Licence No." required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <label for="Phone no" class="sr-only">Phone No.</label>
                        <input type="number" name="phone_number" id="phoneno" class="form-control" placeholder="Phone No." required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4 ">
                        <label for="Mobile No." class="sr-only">Mobile No.</label>
                        <input type="number" name="mobile_number" id="mobileno" class="form-control" placeholder="Mobile No." required autofocus>
                    </div>
                </div><br>
                <div class="row">
                    <div class=" col-md-4">
                        <label for="streetno" class="sr-only">Street No.</label>
                        <input type="text" name="street" id="Street No." class="form-control" placeholder="Street No." required autofocus>
                    </div>
                    <div class=" col-md-4 col-md-offset-4">
                        <label for="city" class="sr-only">City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="City" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="State" class="sr-only">State</label>
                        <input type="text" name="state" id="state" class="form-control " placeholder="State" required autofocus>
                    </div>
                    <div class="  col-md-4 col-md-offset-4 ">
                        <label for="Pincode" class="sr-only">Pincode</label>
                        <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Pincode" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="Email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4 ">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4 ">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4 ">
                        <label for="confirmpassword" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="confirmpassword" class="form-control form-group-lg" placeholder="Confirm Password" required autofocus><br>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="row">
                        <button class="btn btn-md  btn btn-warning col-lg-offset-4" type="submit">Register <span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>




@endsection
