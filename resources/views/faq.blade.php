@extends('layouts.main')
@section('content')
    <title>FAQ</title>


    {{ Html::script('<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
    {{ Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}

    {{ Html::style('css/faq.css')}}

    <div style="margin-top:53px;">
        <img style="margin:0px;" class="img-responsive" src="images/FAQ2.jpg" alt="Hospital placeholder image" width="1600" height="300">
    </div>
    <div style="margin-top:80px;" class="container">
        <center><h2>FAQ:-</h2></center>
        <hr style="border-color:#353232;border-width:80%;">
        <dl><dd><dt>1-What are the categories displayed on the home page of website or on the home screen of the app?</dt>
            These are the categories of the customers. Basically the venture divides the customers into three categories i.e. Public, Retailers and Hospitals and based on the category they are given services. Joining us as a doctor is the service in which the person get the appointments of the public as details given by doctors while joining. And also the doctor can answer to the questions asked by the public for medication help.</dd></dl>
        <dl><dd><dt>2-If I don't have an account can I purchase medicines and avail services of public categories?</dt>
            Yes, if you don't have an account then you can only avail the service of medicine purchase by selecting public category from home page and on login page select Continue as Guest and proceed with purchase by uploading a prescription but for other services having an account is compulsory</dd></dl><dl><dd><dt>3-Is it compulsory to upload a prescription while purchasing medicines in public category?</dt>Yes, uploading a prescription is necessary while ordering medicines either on website or through mobile application and that prescription should be present for verification while delivery of medicines.</dd></dl>
        <dl><dd><dt>4-If I am registered as a doctor what other services are available for me?</dt>Though you are registered as a doctor you can avail the services of the public categories and in addition you are getting service of getting appointments of patients.</dd></dl><dl><dd><dt>5-Is there a minimum condition for public about the amount of medicines they can order?</dt>Yes, there is a condition for the minimum amount of medicine to be ordered. Under public category the minimum amount is Rs.100 and in case of retailer or hospitals it is Rs.500</dd></dl><dl><dd><dt>6-	What are the conditions for using the service of medicine return?</dt>Medicines are often changed by the doctors due to medical reasons and the medicines left by the patient is of no use for him then in this condition the customer in public category can return the medicines under these conditions:-<ul><li>The medicine should not be expired.</li><li>The medicine should be purchased from Medicenter and the customer should have a receipt of that.</li><li>The medicine like capsules or tabs should be in good condition and like syrups seals should not be opened.</li><li>And medicines like tabs and capsules (1 strip) and syrup ( a bottle with seal not open) are minimum amount.
                    Rest depending upon the condition as stated by the customer the service will be given.
                </li></ul></dd></dl>
        <dl><dd><dt>7-If we ask a question from a doctor and want to hide my details from doctor then is it possible?</dt>Yes,definitely and it's under our policy that when public will ask some question then the question will go to doctor without the details of the patient.</dd></dl><dl><dt>8-Can a retailer or a hospital get the medicine delivered at some different  address as mentioned during registration?<dd>No, a retailer or a hospital can get medicines delivered at there firm's address and cannot change that during order as it is a confirmation for our firm that medicines are delivered to authentic person or place.</dd></dt></dl>
        <dl><dd><dt>
                9-	What do you mean by referral discounts?
            </dt>Referral discounts are the discounts offered to the customer on promotion of the Medicenter by promoting the mobile application.</dd></dl><dl><dd><dt>10-Under the service of medical subscription can we end the subscription in the mid of the subscription period?</dt>Yes, you can easily end the subscription and but that should be done two days before delivery of the new batch of the medicine under subscription.</dd></dl>
        <hr style="border-color:#353232;border-width:80%;">
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery-1.11.2.min.js')}}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>

@endsection