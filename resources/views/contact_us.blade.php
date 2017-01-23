@extends('layouts.main')

@section('content')
    <title>Contact Us</title>


    {{Html::style('css/medicenter_contact.css')}}


    {{Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
{{Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}
<div style="margin-top:53px;">
<img style="margin-left:0; margin-right:0;" class="img-responsive" src="images/cu21.jpg" alt="Contact_Us placeholder image" width="1600" height="400">
</div>




<div style="margin-top:50px;" class="container">
<div class="row">
  <div class="col-md-6">
      <div style="border-radius:50px; " class="well well-sm ">
      <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
                    @endforeach
                </ul>

                @if( \Session::has('message'))
                    <div class="alert alert-info">
                        {{ \Session::get('message')}}
                    </div>
                @endif
                {!! Form::open(array('route' => 'contact_store', 'class' => 'form-horizontal')) !!}

                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center glyphicon glyphicon-user"></span>
                            <div class="col-md-8">
                                <input id="fname" name="first_name" type="text" placeholder="First Name" class="form-control" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center glyphicon glyphicon-user"></span>
                            <div class="col-md-8">
                                <input id="lname" name="last_name" type="text" placeholder="Last Name" class="form-control" maxlength="20">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center glyphicon glyphicon-envelope"></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center glyphicon glyphicon-phone"></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="number" placeholder="Phone" class="form-control" max="9999999999">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center glyphicon glyphicon-edit"></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
               {{Form::close() }}
            </div>
        </div>
        <style>
            .header {
                color: #36A0FF;
                font-size: 27px;
                padding: 10px;
            }

            .bigicon {
                font-size: 35px;
                color: #36A0FF;
            }
        </style>

        <div class="col-md-5 col-md-offset-1">
            <div style="border-radius:50px;" class="well well-sm" >
                <h3 style="font-style:oblique; padding:0px; margin-bottom:40px; margin-left:100px; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color:#99D1CF;">Reach Us</h3>
                <address style="margin-left:30px;">
                    <strong>RAMA MEDICAL STORE AND SUPPLIERS</strong><br>
                    MR. GYANENDRA SHUKLA<br>
                    KAURIHAR BAZAR, <br>
                    ALLAHABAD<br>
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 9793155956
                </address>

                <address style="margin-left:30px;">
                    <strong>MEDICENTER</strong><br>
                    SHUBHENDRA SHUKLA<br>
                    KIET <br>
                    GHAZIABAD<br>
                    <a href="mailto:#">medicenter.allahabad@gmail.com</a>
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"> 9582209576 </span>
                </address>
            </div>
        </div>
    </div>
    <hr style="border-color:#252222; border-width:60%;">
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
@endsection