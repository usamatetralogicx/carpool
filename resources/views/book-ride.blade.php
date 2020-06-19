@extends('layouts.app')
@section('content')
@include('partials.header')
<div class="page-wrapper">
       <!-- /.site-header header-one -->
        <section class="inner-banner">
            
        </section><!-- /.inner-banner -->
        <section class="book-ride-two">
             <div class="container ">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
             <p>Looking for a Car</p>
            <h2>Make your find</h2>
        </div><!-- /.block-title -->
        <div class="col-sm-6 offset-sm-3"> 
        @if(session()->has('message'))
     <p class="alert alert-warning">
       {{ session()->get('message')}}
     </p>
     @endif
     </div>
        
                        <form action="{{url('search_ride')}}" method="any" class="booking-form-two ">
                            @csrf
                            <div class="col-md-6 offset-md-3">
                                <h4><label>From:</label></h4>
                                <input type="text" name="from" id="from" value="" placeholder="">
                                <h4><label>To:</label></h4>
                                <input type="text" name="to" id="to"value="" placeholder=""> 
                                <h4><label>Date:</label></h4>                                                 <div class="input-holder">
   
                            
                            <input type="date" id="date" name="departure_date" placeholder="Select date">
                        <i class="conexi-icon-small-calendar"></i>
                            </div><!-- /.input-holder -->
                           <h4> <label>Passangers:</label></h4>
                                <input type="number" name="passengers" value="" min="6" placeholder="" onkeyPress="if(this.value.length==1) return false;">
                            </div>
                           <center> <button type="submit" >Continue</button></center>
                        </form><!-- /.booking-form-two -->
                   
            </div><!-- /.container -->
        </section><!-- /.book-ride-two -->
        <!-- /.site-footer -->
    </div>

@include('partials.footer')
@endsection
@section('scripts')

<script>
    $(document).ready(function(){


     google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('from'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to'));
});
 });
</script>
<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDH1BI-BJUiOP69alhfisepNLSB3L6JuSI"  type="text/javascript"></script>

@endsection