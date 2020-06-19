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
                          <div class="col-sm-6 offset-sm-3"> 
    
  @if(Session::has('book'))
     <p class="alert alert-info">
       {{ Session::get('book')}}
     </p>
     @endif
     </div>
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
                                @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
                    <h2 class="card-title m-t-40" id="10">6.Choose your account</h2>
 <hr>
 <p>If you'd like to close your account because you weren't able to solve a problem, please take a look at our tips first:</p>
 <ul>
     <li>To change your phone number or your email address, you can<<a href="" title=""> edit your profile</a>.
</li>
<li>To resolve a technical issue, please <a href="" title=""></a> contact us.</a>
</li>
<li>To stop receiving emails, you can<a href="" title=""> edit your notifications.</a></li>
<li>To deal with a rating that you feel is unjustified, please <a href="" title=""> contact us.</a> If this is the case, do not close your account - you will not be able to create a new one.</li>
 </ul>
 <p class="mt-3">If you still want to close your account, please tell us a bit more and help us improve our service.</p>
 <div class="container back">
<form  id="update_form">
  @csrf
  <input type="hidden" name="id" value="{{$user}}">
  <div class="form-group col-5">
    <label for="exampleInputEmail1">Reason:</label>
    <select class="form-control" name="reason">
        <option value="">Choose</option>
        <option>Yes</option>
        <option>No</option>
    </select>

                 <span class="form-text reason" style="font-size: 16px;color: red"></span>

  </div>
  <div class="form-group col-5">
    <label for="exampleInputPassword1">Would you recommend BlaBlaCar?</label>
    <select class="form-control" name="recommend">
        <option value="">Choose</option>
        <option>Yes</option>
        <option>No</option>
        
    </select><span class="form-text recommend" style="font-size: 16px;color: red"></span>
  </div>
  <div class="form-group col-6">
    <label for="exampleCheck1">What could we improve?</label>
    <textarea class="form-control" name="improve_message" rows="3"></textarea>
                  <span class="form-text improve" style="font-size: 16px;color: red"></span>
  </div>
  <button type="submit" class="btn btn-danger">Close my account</button>
</form>
     
 </div>


                                <!-- photo section ends here -->
                              
                                <!-- car section starts here -->
                                
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
                      url: "{{ url('closed_account') }}",
                      method : 'post',
                      data: formData,
                      contentType: false,
                       cache: false,
                       processData: false,
                      success: function(result){
                    
                            if(result.message.reason)
                            {
                              $('.reason').html(result.message.reason[0]);
                            }
                           if(result.message.recommend)
                            {
                              $('.recommend').html(result.message.recommend[0]);
                            }
                            if(result.message.improve_message)
                            {
                              $('.improve').html(result.message.improve_message[0]);
                            }
                               
                        else{
                          bootbox.alert({
                title: "Message",
                message:result.message,
                callback: function(){
                   $("#update_form").trigger("reset");
                              $('.reason').html('');
                              $('.recommend').html('');
                              $('.improve').html('');
                            
                }   
              });


                        }
                      }});
                });

</script>
@endsection