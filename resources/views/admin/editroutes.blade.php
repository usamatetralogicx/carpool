@extends('layouts.app_admin')
@section('title','Routes')
@section('content')
   <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Routes</h4>

<form  id="update-form">
  @csrf
 <div class="form-row">
  <div class="form-group col-sm-6">
    <label>Per Km:</label>
    <input type="text" class="form-control" name="km"  value="{{$routes->Per_KM}}">
    <div class="km_error  alert alert-danger"></div>
  </div>
  <div class="form-group col-sm-6">
    <label >Fare:</label>
    <input type="text" class="form-control" name="fare"  value="{{$routes->Fare}}">
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
              jQuery('#update-form').submit(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                  });
                  var myForm = document.getElementById('update-form');
                  var formData = new FormData(myForm);
                    jQuery.ajax({
                      url: "{{ url('routes/update') }}",
                      method : 'post',
                      data: formData,
                      contentType: false,
                       cache: false,
                       processData: false,
                      success: function(result){
                        if(result.success==0){
                          if(result.validation==0){
                            if(result.message.from)
                            {
                              $('.from_error').show();
                              $('.from_error').html(result.message.from[0]);
                            }
                          if(result.message.to)
                            {
                              $('.to_error').show();
                              $('.to_error').html(result.message.to[0]);
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
                   $("#update-form").trigger("reset");
                              $('.image_error').html('');
                              $('.category_error').html('');
                              $('.show_image').css('display','none');
                }   
              });


                        }
                      }});
                  });
            });
</script>
@endsection