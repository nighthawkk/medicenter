@extends('layouts.public')
@section('content')
    {{ Html::style('css/bootstrapmedical.css')}}
    <title>Public signin</title>
    <div style="margin-top:51px;">
        <img style="margin-left:0; margin-left:0px;" class="img-responsive" src="{{URL::asset('images/signin1.jpg')}}" alt="Hospital placeholder image" width="1650" height="350">
    </div><br>
    <div class="container">

        <form class="form-signin col-md-4 col-md-offset-4 form-group-md " action="{{ url('/pub/signin')}}" method="post" >
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" id="inputUsername" class="form-control form-group-lg" placeholder="Username" value="{{ old('username') }}" name="username" required autofocus>
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif

            </div>
                <br>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="Password" id="inputPassword" class="form-control" placeholder="Password" value="{{ old('password') }}"  name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

            </div>

            <div class="checkbox">
                <label><input type="checkbox" value="remember-me"><strong> Keep me sign in</strong></label>
            </div>
            <center><button style="padding: 6px 48px; margin-left:8px" class="btn btn-md btn btn-success col-sm-offset-6 " type="submit"> Sign in  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button></center>
            <br>
            <center><button style="padding: 6px 19px; margin-left:8px" type="button" class="btn btn-success col-sm-offset-6" onClick="location.href='/medicine'">Continue As Guest<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button></center>
        </form>

    </div>



@endsection