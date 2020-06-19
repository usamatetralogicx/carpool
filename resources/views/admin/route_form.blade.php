@extends('layouts.app_admin')
@section('title','Routes')
@section('content')
   <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Routes</h4>

<form method="post" action="{{url('routes/add')}}" id="category-form">
  @csrf
 
 <div class="form-row">
  <div class="form-group col-sm-6">
    <label>Per Km:</label>
    <input type="text" class="form-control" name="km">
    <div class="km_error  alert alert-danger"></div>
  </div>
  <div class="form-group col-sm-6">
    <label >Fare:</label>
    <input type="text" class="form-control" name="fare">
    <div class="fare_error  alert alert-danger"></div> 
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    
  </div>
    <div class="col-sm-4">
  <button type="submit" class="btn btn-primary btn-block ">Submit</button>  
  </div>
    <div class="col-sm-4">
    
  </div>
</div>
  
</form>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>


@endsection
@section('scripts')
<script>
      $(document).ready(function(){

        $('.to_error').hide();
        $('.from_error').hide();
         $('.km_error').hide();
          $('.fare_error').hide();
  $('#category-form').submit(function(e){
e.preventDefault();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
}
});
var myForm = document.getElementById('category-form');
var formData = new FormData(myForm);
$.ajax({
url: "{{ url('routes/add')}}",
method : 'post',
data: formData,
contentType: false,
cache: false,
processData: false,
success: function(result){
if(result.success==0){
if(result.validation==0){
if(result.message.to)
{
$('.to_error').show();  
$('.to_error').html(result.message.to[0]);
}else{
$('.to_error').html('');
}
if(result.message.from)
{
  $('.from_error').show();
$('.from_error').html(result.message.from[0]);
}
if(result.message.km)
{
  $('.km_error').show();
$('.km_error').html(result.message.km[0]);
}
if(result.message.fare)
{
  $('.fare_error').show();
$('.fare_error').html(result.message.fare[0]);
}
}
}

else{
bootbox.alert({
title: "Message",
message:result.message,
callback: function(){
$("#category-form").trigger("reset");
$('.name_error').html('');
$('.image_error').html('');
$('#avatar').html('');
// $('.show_image').css('display','none');
}
});
}
}});
});

});
</script>
@endsection