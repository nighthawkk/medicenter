@extends('layouts.main')
@section('content')
    <title>Services</title>
    {{Html::style('css/medicenter_services.css')}}
    {{Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
    {{Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}

    <div style="margin-top:53px;">
        <img style="margin:0px;" class="img-responsive" src="images/SERVICE PAGE1.jpg" alt="Hospital placeholder image" width="1600" height="400">
    </div>
    <div style="margin-top:90px;">
        <div class="row">
            <div class="col-sm-3 col-md-offset-0">

                <img style="margin-bottom:10px; margin-right:20px;" class=" img-rounded img-responsive" src="images/hospital1.jpg" alt="Retailer placeholder image" width="250" height="250">
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h3 style="color:#97D9D2;">SERVICES OFFERED TO RETAILER AND HOSPITALS:</h3>
                <ul>
                    <li>Delivery with in 24 hours</li>
                    <li>Most of the medicle brands and goods available</li>
                    <li>To store delivery</li>
                    <li>Extra discount on reffering to public and other retailer</li>
                    <li>Additional discount on bulk order</li>
                </ul>
                <h4>
                    NOTE: - Hospital/Retailer must have a valid license/registeration number else the order will be declined
                </h4>
            </div>
        </div>
        <hr style="border-color:#555151; border-width:60%;">
        <div class="row">
            <div class="col-sm-3 col-md-offset-0">
                <img style="margin-bottom:20px;" class="img-rounded img-responsive" src="images/public3.jpg" alt="Retailer placeholder image" width="250" height="250">
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h3 style="color:#97D9D2;">SERVICES OFFERED TO PUBLIC:</h3>
                <ul>
                    <li>
                        Easy way to get doctor's appointment.
                    </li>
                    <li>Return policy of medicine with cashback</li>
                    <li>Medicine alarm</li>
                    <li>Medicine Subscription</li>
                    <li>Miss call service</li>
                    <li>Medicine dictionary</li>
                    <li>Hubs if wanna personally go and receive medicine. </li>
                    <li>Medicinal services at reasonable price.</li>
                </ul>
                <h4>NOTE:- Medicine order will be accepted only if you have submitted the prescription by the doctor else the order will be declined.</h4>
            </div>
        </div>
        <hr style="border-color:#555151; border-width:60%;">
        <div class="row">
            <div class="col-sm-3 col-md-offset-0">
                <img  style="margin-bottom:20px;" class=" img-rounded img-responsive" src="images/doc2.jpg" alt="Retailer placeholder image" width="250" height="250">
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h3 style="color:#97D9D2;">SERVICES OFFERED TO DOCTOR:</h3>
                <h3>JOIN AS DOCTOR !</h3>
                <ul><li>Once you join us as doctors, we can arrange appointments of patients rendering our services.</li>
                    <li> And rest you  can use the services of public by same user name and password.</li></ul>
                <h4>NOTE: - Doctor must be a registered practitioner  else the services will be declined.</h4>
            </div>
        </div>
        <hr style="border-color:#211F1F; width:60%;">
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  {{Html::script('js/jquery-1.11.2.min.js')}}

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{Html::script('js/bootstrap.js')}}


@endsection