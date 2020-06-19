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
                              <!-- photo section starts here -->
                              <form id="update_photo">
                                @csrf
                                <input type="hidden" name="id" value="{{$find->id}}">
                                <h4 class="card-title m-t-40 mt-2" id="3">2. Your Profile Photo</h4>

                                 <div class="col-lg-9 col-xlg-10 col-md-8">
                        <div class="card">
                            <div class="card-body ">
                             <center> <h3 class="card-title m-t-10 mt-2">{{$find->username}}</h3></center>
  <h6>If you want to update your profile picture then click on update button</h6>
                                <center class="m-t-30"> <img src="{{asset('images/'.$find->Image)}}" id="imgthumbnail" class="img-circle" width="150" />
                                    <input type="file" name="image" value="" placeholder="" id="thumbnail"  class="form-control" title=" " style="color: transparent;margin-left: 210px;border: none">
                                    <br>
                                   <button type="submit" class="btn btn-secondary">update</button></center>
                            </div>
                            <div>
                            </div>
                             </form>
                                <hr> 
                           
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>{{$find->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{$find->phone}}</h6>                               
                                <br/>
                               
                            </div>
                        </div>
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
     $('#thumbnail').on('change', function() {
var file = $(this).get(0).files;
var reader = new FileReader();
reader.readAsDataURL(file[0]);
reader.addEventListener("load", function(e) {
var image = e.target.result;
$("#imgthumbnail").attr('src', image);
});
});
     jQuery('#update_photo').submit(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                  });
                  var myForm = document.getElementById('update_photo');
                  var formData = new FormData(myForm);
                    jQuery.ajax({
                      url: "{{ url('update_photo') }}",
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
$('input[type="file"]').attr('title', window.webkitURL ? ' ' : '');
</script>
@endsection