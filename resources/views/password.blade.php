@extends('layouts.app')
@section('style')
<style type="text/css">
    .color{
         background-color: #EDEDED;
    }
    .back{
        background-color: #EDEDED ;
    }
</style>
@endsection
@section('content')    
@include('partials.header')    
       <!-- /.site-header header-one -->
        <section class="inner-banner2">
            <div class="container">
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
                    <section class="book-ride-two2 container">
                        
 <div class="row">
                    <div class="col-lg-3 col-xlg-2 col-md-4">
                        <div class="stickyside">
                               <div class="list-group" id="top-menu">
                                <a  class="text-white list-group-item bg-secondary">Profile Information</a>
                                <a href="{{url('phone_verification')}}" class="list-group-item">Phone Verification </a>
                                <a href="{{url('photo')}}" class="list-group-item">Photo</a>

                                <a href="{{url('car')}}" class="list-group-item">Car</a>
                                @if(@$id)
                                <a href="{{url('driver_list',@$id)}}" class="list-group-item">Car Booking list</a>
                                @endif
                            </div>
                            <div class="list-group mt-3" id="top-menu">
                                <a  class="list-group-item bg-secondary text-white">Account</a>
                                <a href="{{url('transactions')}}" class="list-group-item">Completed transactions</a>
                                <a href="{{url('new_password')}}" class="list-group-item">Passwords</a>
                                <a href="{{url('close_account')}}" class="list-group-item">Close my account</a>
                            </div>
                              <!-- <div class="list-group mt-3" id="top-menu">
                                <a href="#7" class="list-group-item bg-secondary text-white">Title will be 7</a>
                                <a href="#8" class="list-group-item">Title will be 8</a>
                                <a href="#9" class="list-group-item">Title will be 9</a>
                                <a href="#10" class="list-group-item">Title will be 10</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-xlg-10 col-md-8">
                        <div class="card">
                            <div class="card-body">    
 <h2 class="card-title m-t-40" id="9">5.Change Password</h2>
 <p>If you forget your password, it will be sent to usamaashraf745@yahoo.com</p>
 <form id="update_form">
    @csrf
    <input type="hidden" name="id" value="{{$find}}">
 <table>
     <tbody>
         <tr >
             <td class="pr-3">Current Password</td>
             <td><input class="form-control"type="password" name="old_password" value="" placeholder=""></td>
         </tr>
                  <tr>
             <td>New Password</td>
             <td><input class="form-control" type="password" name="new_password" value="" placeholder="">
                <span class="form-text new_password" style="font-size: 16px;color: red"></span></td>
         </tr>
                  <tr>
             <td>Confirm New  Password</td>
             <td><input type="password"class="form-control" name="confirm_password" value="" placeholder="">
                <span class="form-text confirm_password" style="font-size: 16px;color: red"></span></td>
         </tr>
           <tr class="pt-3">
             <td></td>
             <td><button class="btn btn-primary" type="submit">Save</button></td>
         </tr>
     </tbody>
 </table>       
     </form>
 </div>       
     

                                
                                
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
                      url: "{{ url('update_password') }}",
                      method : 'post',
                      data: formData,
                      contentType: false,
                       cache: false,
                       processData: false,
                      success: function(result){
                        if(result.success==0){
                          if(result.validation==0){
                            if(result.message.new_password)
                            {
                              $('.new_password').html(result.message.new_password[0]);
                            }
                           if(result.message.confirm_password)
                            {
                              $('.confirm_password').html(result.message.confirm_password[0]);
                            }
                           

                          }
                        }
                        
                        else{
                          bootbox.alert({
                title: "Message",
                message:result.message,
                callback: function(){
                   $("#update_form").trigger("reset");
                              $('.confirm_password').html('');
                              $('.new_password').html('');
                            
                }   
              });


                        }
                      }});
                });

</script>
@endsection