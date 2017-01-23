@extends('layouts.doctor')
@section('content')
    <div style="margin-top:51px;">
        <img style="margin-left:0; margin-left:0px;" class="img-responsive" src="{{URL::asset('images/sign_up.jpg')}}" alt="Hospital placeholder image" width="1650" height="350">
    </div>
    {{ Html::style('css/faq.css')}}

    <div style="margin:80px;" class="jumbotron">
        <div class="container ">
            <form action="{{ url('/doc/register') }}" method="post" class="form" role="form">
                <div class="row">
                    <div class=" form-group-lg col-md-4">
                        <label for="inputFirstname" class="sr-only">Firstname</label>
                        <input type="text" name="first_name" id="inputFirstname" class="form-control" placeholder="Firstname" required autofocus>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4 ">
                        <label for="inputLastname" class="sr-only">Lastname</label>
                        <input type="text" name="last_name" id="Lastname" class="form-control form-group-lg" placeholder="Lastname" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group-lg col-md-4 ">
                        <label for="inputPhone no." class="sr-only">Phone No.</label>
                        <input type="number" name="phone" id="Phone No." class="form-control form-group-lg" placeholder="Phone No." required autofocus><br>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4">
                        <label for="Mobile No." class="sr-only">Mobile No.</label>
                        <input type="number" name="mobile" id="Mobileno" class="form-control form-group-lg" placeholder="Mobile No." required autofocus>
                    </div><br>
                </div>
                <div class="row">
                    <div class="form-group-lg col-md-4 ">
                        <label for="Email" class="sr-only">Email</label>
                        <input type="email" name="email" id="Email" class="form-control form-group-lg" placeholder="Email" required autofocus>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4 ">
                        <label for="Street No" class="sr-only">Street No.</label>
                        <input type="text" name="street" id="Streetno" class="form-control form-group-lg" placeholder="Street No." required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group-lg col-md-4 ">
                        <label for="city" class="sr-only">City</label>
                        <input type="text" name="city" id="City" class="form-control form-group-lg" placeholder="City" required autofocus>
                    </div>
                    <div class="form-group-lg col-md-4 col-md-offset-4">
                        <label for="inputstate" class="sr-only">State</label>
                        <input type="text" name="state" id="state" class="form-control form-group-lg" placeholder="State" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group-lg col-md-4 ">
                        <label for="postal code" class="sr-only">Postal code</label>
                        <input type="text" name="pincode" id="Postalcode" class="form-control form-group-lg" placeholder="Postal code" required autofocus>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4 ">
                        <label for="Username" class="sr-only">Username</label>
                        <input type="text" name="username" id="Confirm Password" class="form-control form-group-lg" placeholder="Username" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group-lg col-md-4 ">
                        <label for="Password" class="sr-only">Password</label>
                        <input type="password" name="password" id="Password" class="form-control form-group-lg" placeholder="Password" required autofocus>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4 ">
                        <label for="Confirm Password" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="confirmpassword" class="form-control form-group-lg" placeholder="Confirm Password" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group-lg col-md-4">
                        <label for="inputclinicname" class="sr-only">Clinic Name</label>
                        <input type="text" name="clinic_name" id="inputclinicname" class="form-control form-group-lg" placeholder="Clinic Name" required autofocus>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4 ">
                        <label for="inputclinicaddress" class="sr-only">Clinic Address</label>
                        <input type="text" name="clinic_address" id="clinicaddress" class="form-control form-group-lg" placeholder="Clinic Address" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group-lg col-md-4">
                        <label for="inputtimeslot" class="sr-only">Time slot</label>
                        <input type="text" name="time_slot" id="inputtimeslot" class="form-control form-group-lg" placeholder="Time slot" required autofocus>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4 ">
                        <label for="inputspeciality" class="sr-only">speciality</label>
                        <input type="text" name="speciality" id="Speciality" class="form-control form-group-lg" placeholder="Speciality" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group-lg col-md-4">
                        <label for="inputFee" class="sr-only">Appointment Fees</label>
                        <input type="number" name="fee" id="inputfee" class="form-control form-group-lg" placeholder="Appointment Fees(in rupees)" required autofocus>
                    </div>
                    <div class=" form-group-lg col-md-4 col-md-offset-4 ">
                        <label for="inputregnumber" class="sr-only">Registration Number</label>
                        <input type="text" name="reg_number" id="regnumber" class="form-control form-group-lg" placeholder="Registration Number" required autofocus><br>
                    </div>
                </div>
                <div class=" form-group-lg col-md-4 col-md-offset-4">
                    <div class="row">
                        <button class="btn btn-lg  btn btn-info btn-block" type="submit">Register <span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('js/jquery-1.11.2.min.js')}}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.js')}}"></script>

@endsection