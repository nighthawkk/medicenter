@extends('layouts.public')
@section('content')
    {{ Html::style('css/faq.css')}}
    <script type="text/javascript">

        function validate(nForm){

            var firstName = nForm['first_name'];
            var lastname = nForm['last_name'];
            var city = nForm['city'];
            var state = nForm['state'];
            var street = nForm['street'];

            if (!/^[a-zA-Z]+$/.test(firstName.value))
            {
                alert('Invalid First Name');
                firstName.value = "";
                firstName.focus();
                return false;
            }
            if (!/^[a-zA-Z]+$/.test(lastname.value))
            {
                alert('Invalid Last Name');
                lastname.value = "";
                lastname.focus();
                return false;
            }
            if (!/^[a-zA-Z]+$/.test(street.value))
            {
                alert('Invalid Last Name');
                street.value = "";
                street.focus();
                return false;
            }
            if (!/^[a-zA-Z]+$/.test(city.value))
            {
                alert('Invalid Last Name');
                city.value = "";
                city.focus();
                return false;
            }
            if (!/^[a-zA-Z]+$/.test(state.value))
            {
                alert('Invalid Last Name');
                state.value = "";
                state.focus();
                return false;
            }
        }
    </script>
    <div style="margin-top:53px;">
        <img style="margin-left:0; margin-left:0px;" class="img-responsive" src="{{URL::asset('images/sign_up.jpg')}}" alt="Hospital placeholder image" width="1650" height="350">
    </div>

    <div style="margin:80px;" class="jumbotron">
        <div class="container ">

            <form action="{{ url('/pub/signup') }}" method="post" onsubmit="return validate(this)" class="form" role="form">
                {{csrf_field()}}

                <div class="row">
                    <div class="col-md-4">
                        <label for="inputFirstname" class="sr-only">Firstname</label>
                        <input type="text" name="first_name" id="inputFirstname" class="form-control form-group-lg" maxlength="20" placeholder="Firstname" required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4 ">
                        <label for="inputLastname" class="sr-only">Lastname</label>
                        <input type="text" name="last_name" id="Lastname" class="form-control form-group-lg" maxlength="20" placeholder="Lastname" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <label for="inputPhone no." class="sr-only">Phone No.</label>
                        <input type="number" name="phone" id="Phone No." class="form-control form-group-lg" min="1111111111" max="9999999999" placeholder="Phone No." required autofocus>
                    </div>
                    <div class=" col-md-4 col-md-offset-4">
                        <label for="Mobile No." class="sr-only">Mobile No.</label>
                        <input type="number" name="mobile" id="Mobileno" class="form-control form-group-lg" min="1111111111" max="9999999999" placeholder="Mobile No." required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class= "col-md-4 ">
                        <label for="Email" class="sr-only">Email</label>
                        <input type="text" name="email" id="Email" class="form-control form-group-lg" placeholder="Email" required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4 ">
                        <label for="Street No" class="sr-only">Street No.</label>
                        <input type="text" name="street" id="Streetno" class="form-control form-group-lg" maxlength="15" placeholder="Street No." required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <label for="city" class="sr-only">City</label>
                        <input type="text" name="city" id="City" class="form-control form-group-lg" maxlength="20" placeholder="City" required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label for="inputstate" class="sr-only">State</label>
                        <input type="text" name="state" id="state" class="form-control form-group-lg" maxlength="20" placeholder="State" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4 ">
                        <label for="postal code" class="sr-only">Postal code</label>
                        <input type="number" name="pincode" id="Postalcode" class="form-control form-group-lg" max="999999" placeholder="Postal code" required autofocus>
                    </div>
                    <div class="col-md-4 col-md-offset-4 ">
                        <label for="Username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" class="form-control form-group-lg" placeholder="Username" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <label for="Password" class="sr-only">Password</label>
                        <input type="password" name="password" id="Password" class="form-control form-group-lg" placeholder="Password" required autofocus>
                    </div>
                    <div class=" col-md-4 col-md-offset-4 ">
                        <label for="Confirm Password" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="confirmpassword" class="form-control form-group-lg" placeholder="Confirm Password" required autofocus><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <button class="btn btn-lg  btn btn-info btn-block" type="submit">Register <span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection