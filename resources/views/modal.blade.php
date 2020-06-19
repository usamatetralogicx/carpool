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
                                <a href="#2" class="list-group-item">Phone Verification </a>
                                <a href="#3" class="list-group-item">Photo</a>
                                <a href="#5" class="list-group-item">Car</a>
                                <a href="#6" class="list-group-item">Personal Information</a>
                            </div>
                            <div class="list-group mt-3" id="top-menu">
                                <a href="#7" class="list-group-item bg-secondary text-white">Account</a>
                                <a href="#8" class="list-group-item">Completed transactions</a>
                                <a href="#9" class="list-group-item">Passwords</a>
                                <a href="#10" class="list-group-item">Close my account</a>
                            </div>
                              <div class="list-group mt-3" id="top-menu">
                                <a href="#7" class="list-group-item bg-secondary text-white">Title will be 7</a>
                                <a href="#8" class="list-group-item">Title will be 8</a>
                                <a href="#9" class="list-group-item">Title will be 9</a>
                                <a href="#10" class="list-group-item">Title will be 10</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-xlg-10 col-md-8">
                        <div class="card">
                            <div class="card-body">
                            
                                <h4 class="card-title m-t-40" id="2">1.Phone Verification</h4>
                                <p class="small">Verify your profile to become a trusted member of our community and easily find others to travel with!</p>
                                <!-- Email address -->
                                <div class="border border-secondary ">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please verify your email address</h5>
                                    <div class="row col-md-12 ">
                                        <div class="col-md-8 pb-3">
                                            Your email address is: hamato739@gmail.com <a href="#" style="color: blue;"><u>Edit</u></a><br>
                                                 Having a verified email address means we can contact you if needed.
                                        </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-primary btn-block">Verify email</button>
                                            </div>

                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="border border-secondary mt-4">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please add your phone number</h5>
                                    <div class="row col-md-12 ">
                                        <div class="col-md-8 pb-3">
                                            Add a phone number so you can verify it.,<br>
                                            Adding your phone number means you'll be able to arrange your rides more easily.
                                        </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-primary btn-block">Add My Phone</button>
                                            </div>
                                    </div>
                                </div>

                                <!-- GOvt id -->

                                <div class="border border-secondary mt-4">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please verify your Govt. ID</h5>
                                    <div class="row col-md-12 ">
                                        <div class="col-md-8 pb-3">
                                            Other members will be more likely to choose to travel with you!
                                        </div>
                                            <div class="col-md-4 mb-5">
                                                <button type="button" class="btn btn-primary btn-block">Verify my Govt id</button>
                                            </div>
                                    </div>
                                </div>


                                <!-- Facebook account -->

                                <div class="border border-secondary mt-4">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please connect your Facebook account</h5>
                                    <div class="row col-md-12  ">
                                        <div class="col-md-8 pb-3">
                                            Connect your account so other members can see how many Facebook friends you have, and build trust on your profile.
                                        </div>
                                            <div class="col-md-4 mb-5">
                                                <button type="button" class="btn btn-info btn-block" style=""><i class="fa fa-facebook"></i>&nbsp &nbspConnect my account</button>
                                            </div>
                                    </div>
                                </div>


                                 
                              <!-- photo section starts here -->
                                <h4 class="card-title m-t-40 mt-2" id="3">2. Your Profile Photo</h4>
                                 <div class="col-lg-9 col-xlg-10 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="assests/images/users/5.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>


                                <!-- photo section ends here -->
                              
                                <!-- car section starts here -->
                                <h4 class="card-title m-t-40" id="5">4. Your car details</h4>
                                <!-- car section starts here -->
<div class="row col-md-12">
<h2 class="text-center col-md-12">What's your number plate?</h2>


<div class="row col-md-12 ">
<div class="col-md-2">

</div>

<div class="row">
<div class="col-md-12">
<div class="card card-outline-info">

<div class="card-body">
<form action="{{url('post')}}" method="post">
  @csrf
<div class="form-body">
<h3 class="card-title">We’ll only share it with passengers who book with you.</h3>
<hr>
<<input type="hidden" name="" value="{{$cars['id']}}" placeholder="">
<div class="col-md-12">
<div class="form-group">
<label>Company</label>
<select class="form-control custom-select" name="company">
  <option>Select your company</option>
<option>MARUTI</option>
<option>HYUNDAI</option>
<option>HONDA</option>
<option>FORD</option>
<option>TATA</option>
</select>
</div>
</div>

<div class="row">
    <div class="col-md-4">     
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-secondary btn-block">Continue</button>
    </div>
    
</div>

</div>
<!--/span-->
</div>
</div>

</form>
</div>
</div>
</div>
</div>

</div>
<div class="container">
 <h4 class="card-title m-t-40" id="8">4.Completed Transactions</h4>
 <hr>
 <p class="justify ml-3">Here you can find the list of the transactions you completed on BlaBlaCar (bookings that were manually or automatically approved), as well as any pending or completed refunds. <a href="" title=""> See My Bookings</a></p>
 <div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active2" href="#menu1">Recent Payments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link border" href="#menu2" data-toggle="tab">Recent Payments</a>
        </li>
    </ul>
                     </div> 
                     <table class="table table-bordered mt-3 color">
                         <thead>
                             <tr class="text-center">
                                 <th scope="col">Transaction date</th>
                                 <th scope="col">Details</th>
                                 <th scope="col">Description</th>
                                 <th scope="col">Amount</th>
                             </tr>
                         </thead>
                     </table>        
                     <div class="container back">
 <h2 class="card-title m-t-40" id="9">5.Change Password</h2>
 <p>If you forget your password, it will be sent to usamaashraf745@yahoo.com</p>
 <table>
     <tbody>
         <tr >
             <td class="pr-3">Current Password</td>
             <td><input class="form-control"type="password" name="" value="" placeholder=""></td>
         </tr>
                  <tr>
             <td>New Password</td>
             <td><input class="form-control" type="password" name="" value="" placeholder=""></td>
         </tr>
                  <tr>
             <td>Confirm New  Password</td>
             <td><input type="password"class="form-control" name="" value="" placeholder=""></td>
         </tr>
           <tr class="pt-3">
             <td></td>
             <td><button class="btn btn-primary">Save</button></td>
         </tr>
     </tbody>
 </table>       
     
 </div>
 <div class="container ">
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
<form>
  <div class="form-group col-4">
    <label for="exampleInputEmail1">Reason:</label>
    <select class="form-control">
        <option value=""></option>}
        option
    </select>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Would you recommend BlaBlaCar?</label>
    <select class="form-control col-4">
        <option value="">Choose</option>
        <option>Yes</option>
        <option>No</option>
        
    </select>
  </div>
  <div class="form-group">
    <label for="exampleCheck1">What could we improve?</label>
    <textarea class="form-control col-6" name="" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-danger">Close my account</button>
</form>
     
 </div>

                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
 </section>
@include('partials.footer')
@endsection