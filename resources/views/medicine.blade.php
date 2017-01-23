@extends('layouts.app')
 @section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="panel panel-default">
                     <div class="panel-heading">Medicines..</div>

                     <div class="panel-body">
                         BUY MEDICINES.
                         {{Form::open(array('id'=>"myform",'files'=>true))}}
                         <div class="form-group">
                             <label for="">Medicine Name</label>
                             <select class="formcontrol input-sm" name="medicine" id="medicine">
                                 @foreach($medicines as $medicine)
                                     <option selected disabled hidden value=''>-- select an option --</option>
                                     <option value="{{$medicine->id}}">{{$medicine->NAME}}</option>
                                 @endforeach
                             </select>
                         </div>

                         <div class="form-group">
                             <label for="">Company</label>
                             <select class="formcontrol input-sm" name="company" id="company">
                                 <option value=""></option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="">Price</label>
                             <select class="formcontrol input-sm" name="price" id="price">
                                 <option value=""></option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="">Pieces</label>
                             <select class="formcontrol input-sm" name="pieces" id="pieces">
                                 <option value=""></option>
                             </select>
                             <label for="">Type</label>
                             <select class="formcontrol input-sm" name="type" id="type">
                                 <option value=""></option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label class="formcontrol input-sm">Quantity</label>
                             <input type="number" class="form-control" name="quantity" value="">
                         </div>



                         {{ Form::submit('Add To Cart',array('class'=>'btn btn-success')) }}





                         {{Form::close()}}


                     </div>
                     <script>
                         $('#medicine').on('change',function(e){
                             console.log(e);

                             var med_id = e.target.value;



                             $.get('/ajax-cat?med_id=' + med_id, function(data){
                                 $('#company').empty();
                                 $('#price').empty();
                                 $('#pieces').empty();
                                 $('#type').empty();
                                 $.each(data, function(index, subcatObj){
                                     $('#company').append('<option value="'+subcatObj.id+'">'+subcatObj.COMPANY+'</option');
                                     $('#price').append('<option value="'+subcatObj.id+'">'+subcatObj.PRICE+'</option');
                                     $('#pieces').append('<option value="'+subcatObj.id+'">'+subcatObj.QUANTITY+'</option');
                                     $('#type').append('<option value="'+subcatObj.id+'">'+subcatObj.TYPE+'</option');
                                     $("#myform").attr('action', 'add-to-cart/'+subcatObj.id );

                                 });
                             });
                         });
                     </script>
                 </div>
             </div>
         </div>
     </div>

 @endsection