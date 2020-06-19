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
     

                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
 </section>
@include('partials.footer')
@endsection