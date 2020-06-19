@extends('layouts.app')
@section('content')    
@include('partials.header')    
       <!-- /.site-header header-one -->
        <section class="inner-banner2">
            <div class="container">
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
                    <section class="book-ride-two2 container">
                    	<div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" id="update_form">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$find->id}}">
                                            <div class="form-group">
                                            	<h2 class="ml-2">Profile</h2>
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="username" value="{{$find->username}}" class="form-control form-control-line" name="username">
                                                     <span class="form-text  name_error" style="font-size: 16px;color: red;"></span>
                                                </div>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="{{$find->email}}" class="form-control form-control-line" name="email" id="example-email">
                                                    <span class="form-text  email_error" style="font-size: 16px;color: red;"></span>
                                                </div>
                                                
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$find->phone}}" class="form-control form-control-line" name="phone">
                                                    <span class="form-text phone_error" style="font-size: 16px;color: red;"></span>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Date of Birth</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$find->date_of_birth}}" class="form-control form-control-line" name="dob">
                                                    <span class="form-text  dob_error" style="font-size: 16px;color: red;"></span>
                                                </div>
                                                
                                            </div>
                                           <!--  <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div> -->
                                             <div class="form-group">
                                                <label class="col-md-12">Country</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$find->Country}}" class="form-control form-control-line" name="country">
                                                    <span class="form-text  country_error" style="font-size: 16px;color: red;"></span>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                  <input type="submit" value="Update" class="btn btn-primary">   
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	</section>
@include('partials.footer')
@endsection
@section('scripts')
<script>
jQuery('#update_form').submit(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                  });
                  var myForm = document.getElementById('update_form');
                  var formData = new FormData(myForm);
                    jQuery.ajax({
                      url: "{{ url('update') }}",
                      method : 'post',
                      data: formData,
                      contentType: false,
                       cache: false,
                       processData: false,
                      success: function(result){
                        if(result.success==0){
                          if(result.validation==0){
                            if(result.message.username)
                            {
                              $('.name_error').html(result.message.username[0]);
                            }
                           if(result.message.email)
                            {
                              $('.email_error').html(result.message.email[0]);
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

</script>
@endsection