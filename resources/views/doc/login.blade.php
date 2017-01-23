@extends('layouts.doctor')
@section('content')
    <title xmlns="http://www.w3.org/1999/html">Doctor Login</title>
    <center><h2 style="margin-top: 100px;">WELCOME TO MEDICENTER</h2></center>
    <br>
    <br>
    <br>
    <div class="container">
        <form class="form-signin col-md-4 col-md-offset-4 form-group-md " action="{{ url('/doc/services')}}" method="POST" >
            {{csrf_field()}}
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" class="form-control form-group-lg" placeholder="Username" name="username" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="Password" id="inputPassword" class="form-control" placeholder="Password"  name="password" required>
            <div class="checkbox">
                <label><input type="checkbox" value="remember-me"><strong> Keep me sign in</strong></label>
            </div>
            <br>
            <center><button style="padding: 6px 48px; margin-left:8px" class="btn btn-md btn btn-success col-sm-offset-6 " type="submit"> Sign in  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button></center>
        </form>
    </div>



@endsection