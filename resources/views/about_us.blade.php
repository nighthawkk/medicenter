@extends('layouts.main')

@section('content')

    <title>About Us</title>

    {{ Html::style('css/bootstrap_about.css')}}
    {{ Html::style('css/font-awesome.css')}}
    {{ Html::style('css/icons.css')}}

    {{ Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
    {{ Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}

  <div class="container">
      <h2 style="margin-top:65px;  color :#244247; text-shadow:#B0A6A6"> A Few Words About Us : </h2>
      <div class="row">
          <div class="col-sm-4 col-md-offset-5">
              <img class="img-rounded img-responsive" src="images/logo2.jpg" alt="Retailer placeholder image" width="150" height="150">
          </div>
      </div>
      <hr style="border-color:#332B2B; border-width:50%;">
      <dl style="margin-top:60px;"><dt>WHO ARE WE ?</dt>
          <dd style="margin-top:12px;"><strong>Rama medical stores and suppliers</strong>
              Rama medical stores and suppliers is a prominent wholesale supplier in Allahabad.Since its establishment in 1978, the group has catered to the trust of people through its quality service.<br>
              Started out as a retail shop, the group became a prominent wholesale supplier with about 150+ wholesale clients, 2 government clients( C.R.P.F and R.A.F) and trusted by several other customers in the city.
          </dd>
      </dl>
      <dl><strong>Headoffice:</strong> Kaurihar, Allahabad. (Largest block in the city).</dl>
      <dl>
          <dt style="margin-top:30px;">
              What we do - Offer fast online access to medicines with convenient home delivery
          <dd style="margin-top:12px;">
              An online platform for the purchase and sales of medicine and medical and healthcare services in form of <strong>an e-commerce website and a phone application.</strong><br>The combination of the website and phone application will not only provide the much needed e-commerce for the medicine and access to other medicinal services but also help in the long longed regulation of home delivery of medicines. The venture is meant to <strong>benefit the total mass of interested buyers and sellers.</strong>
          </dd>
          </dt>
      </dl>

  </div>
    <hr style="border-color:#211F1F; width:70%;" >
    <div class="container">
        <h2 class="text-center" style="color:#16C491;margin-left:10px;">OUR TEAM</h2>
        <hr style="border-color:#211F1F; width:50%;">
        <div class="row">
            <div  class="col-sm-4">
                <img class="img-circle img-responsive" src="images/IMG_64041.JPG" alt="Shubhendra  image" width="300" height="300">
                <h3 style="color:#208F61;margin-left:85px;">Shubhendra<br>(Graphics)
                </h3>
            </div>

            <div class=" col-sm-4">
                <img class="img-circle img-responsive" src="images/utkarsh.jpg" alt="Utkarsh image" width="300" height="300">
                <h3 style="color:#208F61;margin-left:85px;">Utkarsh<br>
                    (Android App)</h3>
            </div>
            <div   class="col-sm-4">
                <img class="img-circle img-responsive" src="images/aman1.jpg" alt="Aman image" width="300" height="300">
                <h3 style="color:#208F61; margin-left:85px;">Aman
                    <br>
                    (Back End)</h3>
            </div>
            <div class="row">
                <div  class="col-sm-4 col-sm-offset-2">
                    <img class="img-circle img-responsive" src="images/shruti1.jpg" alt="Shruti image" width="300" height="300">
                    <h3 style="color:#208F61; margin-left:85px;">Shruti<br>
                        (Content Writing)</h3>
                </div>
                <div   class="col-sm-4">
                    <img class="img-circle img-responsive" src="images/amit1.jpg" alt="Amit image" width="325" height="325">
                    <h3 style="color:#208F61;margin-left:85px;">Amit<br>
                        (Front End)</h3>
                </div>
            </div>
        </div>
    </div>
    <hr style="border-color:#7882CB; width:70%;" >



@endsection