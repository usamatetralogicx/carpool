@extends('layouts.app')
@push('styles')
<style>
 input[type="date"]::-webkit-inner-spin-button{
    display: none;
 }
</style>
@endpush
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
            <h2>Offer a ride</h2>
        </div><!-- /.block-title -->
          <form action="" id="category-form" class="booking-form-two">
                            <div class="row">
                              {!! csrf_field() !!}
                                  <div class="col-md-4 offset-md-2 border">
                                <h4 class="pt-2">Pick up and drop off points</h4>

 
                                    <div class="input-holder">
                                         <div id="pac-container">
                                        <label>Pick Up:</label>
                                        <input type="text" id="from_places" name="input" placeholder="Your destination point">
                                        <p class="alert alert-danger input_error"></p>
                                    <!--    <input id="origin" name="origin" required="" type="hidden" /> -->

      
                                    </div><!-- /.input-holder -->
                                </div>
                                    <div class="input-holder">
                                        <label>Drop-off:</label>
                                        <input type="text" name="input2" id="to_places" placeholder="Your arival point">
                                       <!--  <input id="destination" name="destination" required="" type="hidden" /> -->
                                        
          <h3 id="duration"></h3>
          

                                    </div>
                                   
                                  </div>
                                    
                                &nbsp &nbsp &nbsp &nbsp

                               <div class="col-md-4 border">
                                <h4 class="pt-2 ">My Ride Summary</h4>
                                 <div id="map" style="height: 400px;width:370px">
                                     
                                 </div>
                                 <div id="mode-selector" class="controls">
          <input type="radio" name="type" id="changemode-walking" checked="checked">
          <label for="changemode-walking">Walking</label>

          <input type="radio" name="type" id="changemode-transit">
          <label for="changemode-transit">Transit</label>

          <input type="radio" name="type" id="changemode-driving">
          <label for="changemode-driving">Driving</label>
        </div>
    
                               </div>
                           </div>
                           <div class="row">
                                 <div class="col-md-4 offset-md-2 border mt-2">
                                 <h4 class="pt-2">Date and Time</h4>
                                    <label>Departure date:</label>
                                    
                                    <div class="input-holder">

                                        <input type="date" id="date" name="departure_date" placeholder="Select date">
                                        <i class="conexi-icon-small-calendar"></i>
                                    </div><!-- /.input-holder -->
                                
                                    <div class="input-holder">
                                        <select class="selectpicker" name="departure_time">
                                            <option>Select Time</option>
                                            <option>10AM-10.59AM</option>
                                            <option>12PM-12.59PM</option>
                                            <option>1PM-1.59PM</option>
                                            <option>2PM-2.59PM</option>
                                        </select>
                                        <i class="conexi-icon-clock"></i>
                                    </div><!-- /.input-holder -->
                                        <label>Return date:</label>
                                 
                                    <div class="input-holder">
                                        <input type="date" name="arrival_date"  id="date" placeholder="Select date">
                                        <i class="conexi-icon-small-calendar"></i>
                                    </div><!-- /.input-holder -->
                            
                                    <div class="input-holder">
                                        <select class="selectpicker" name="arrival_time">
                                            <option>Select Time</option>
                                            <option>10AM-10.59AM</option>
                                            <option>12PM-12.59PM</option>
                                            <option>1PM-1.59PM</option>
                                            <option>2PM-2.59PM</option>
                                        </select>
                                        <i class="conexi-icon-clock"></i>
                                    </div><!-- /.input-holder -->
                                      <h5>Click here to calculate your Fare:</h5>
                                       <button id="distance-form" class="btn btn-primary" type="button">calculate</button>
                                       <br>
                                        <h5 class="mt-3" id="distance"></h5>
                                        <input type="hidden" id="hidden" name="fare">
                                        <input type="hidden" name="km" id="km" >
                                    </div>
                                                  &nbsp &nbsp &nbsp &nbsp

                                     <div class="col-md-4 border mt-2">
                                  
                                         <h4 class="pt-2">Select Car Type</h4>
                                    <ul class="radio-fields clearfix">
                                        <li>
                                            <input type="radio" id="test1" name="radio_group" checked value="Any type">
                                            <label for="test1">Any type</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="test2" name="radio_group" value="Hybrid">
                                            <label for="test2">Hybrid</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="test3" name="radio_group" value="SUV">
                                            <label for="test3">SUV</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="test4" name="radio_group" value="Luxury">
                                            <label for="test4">Luxury</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="test5" name="radio_group" value="Van">
                                            <label for="test5">Van</label>
                                        </li>
                                    </ul>
                                
                                <h3 class="pb-2">Select no of seats</h3>
                                <input type="number" name="seats" max="6" value="" placeholder="No of seats" onKeyPress="if(this.value.length==1) return false;" >
                                </div>
                                </div>

                              
                            
                            <center><button  type="submit"class="book-btn ml-10">Offer a ride</button></center>
                        </form><!-- /.booking-form-two -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.book-ride-two -->
        <!-- /.site-footer -->
    </div>
<!-- <script>
  var sda= <?php// echo $data; ?>
</script> -->
@include('partials.footer')
@endsection

@section('scripts')


<script>
  $(document).ready(function(){
    $('.input_error').hide();

    
 
     function calculateDistance() {
            var origin = $('#from_places').val();
            var destination = $('#to_places').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.metric, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance.text;
                    var duration = response.rows[0].elements[0].duration;
                    //console.log(response);
                    //$('#distance').text(response.rows[0].elements[0].distance.text).show();
                    var dur=response.rows[0].elements[0].distance.text;
                    var fare=dur.split(' ');
                    //console.log(fare);
                   var fare2 =fare[0].replace(',','');
                   //console.log(fare2);
                   //console.log(fare2*10);
    var users = {!! json_encode($admin) !!};
    //console.log(users);
    //console.log(fare2*users);
    $('#km').val(fare2);
    $('#hidden').val(fare2*users);
                    $('#distance').text('Your Fare is: '+fare2*users+'Rs');
                    
                }
            }
            }
        // print results on submit the form
        $('#distance-form').click(function(){
              
             calculateDistance();
          
        });
});
</script>

<script>
var infowindow;
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    mapTypeControl: false,
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13
  });
   infowindow = new google.maps.InfoWindow();

  new AutocompleteDirectionsHandler(map);
}

/**
 * @constructor
 */
function AutocompleteDirectionsHandler(map) {
  this.map = map;
  this.originPlaceId = null;
  this.destinationPlaceId = null;
  this.travelMode = 'DRIVING';
  this.directionsService = new google.maps.DirectionsService;
  this.directionsRenderer = new google.maps.DirectionsRenderer;
  this.directionsRenderer.setMap(map);

  var originInput = document.getElementById('from_places');
  var destinationInput = document.getElementById('to_places');
  var modeSelector = document.getElementById('mode-selector');
  this.directionsService = new google.maps.DirectionsService();
  this.directionsDisplay = new google.maps.DirectionsRenderer();
  this.directionsDisplay.setMap(map);
  var originAutocomplete = new google.maps.places.Autocomplete(originInput);
  // Specify just the place data fields that you need.
  originAutocomplete.setFields(['place_id']);

  var destinationAutocomplete =
      new google.maps.places.Autocomplete(destinationInput);
  // Specify just the place data fields that you need.
  destinationAutocomplete.setFields(['place_id']);

  this.setupClickListener('changemode-walking', 'WALKING');
  this.setupClickListener('changemode-transit', 'TRANSIT');
  this.setupClickListener('changemode-driving', 'DRIVING');

  this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
  this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

 // this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
  //this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
    //  destinationInput);
  //this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
}

// Sets a listener on a radio button to change the filter type on Places
// Autocomplete.
AutocompleteDirectionsHandler.prototype.setupClickListener = function(
    id, mode) {
  var radioButton = document.getElementById(id);
  var me = this;

  radioButton.addEventListener('click', function() {
    me.travelMode = mode;
    me.route();
  });
};

AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(
    autocomplete, mode) {
  var me = this;
  autocomplete.bindTo('bounds', this.map);

  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();

    if (!place.place_id) {
      window.alert('Please select an option from the dropdown list.');
      return;
    }
    if (mode === 'ORIG') {
      me.originPlaceId = place.place_id;
    } else {
      me.destinationPlaceId = place.place_id;
    }
    me.route();
  });
};

AutocompleteDirectionsHandler.prototype.route = function() {
  if (!this.originPlaceId || !this.destinationPlaceId) {
    return;
  }
  var me = this;

  this.directionsService.route(
      {
        origin: {'placeId': this.originPlaceId},
        destination: {'placeId': this.destinationPlaceId},
        travelMode: this.travelMode
      },
      function(response, status) {
        if (status === 'OK') {
          me.directionsRenderer.setDirections(response);
          var center = response.routes[0].overview_path[Math.floor(response.routes[0].overview_path.length / 2)];
      infowindow.setPosition(center);
      infowindow.setContent(response.routes[0].legs[0].duration.text + "<br>" + response.routes[0].legs[0].distance.text);
      infowindow.open(me.map);
      
        } else {;
          window.alert('Directions request failed due to ' + status);
        }
      });
};
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
url: "{{ url('/post_offer_ride') }}",
method : 'post',
data: formData,
contentType: false,
cache: false,
processData: false,
success: function(result){
if(result.success==0){
if(result.validation==0){
if(result.message.input)
{
  $('.input_error').show();
$('.input_error').html(result.message.input[0]);
}else{
$('.name_error').html('');
}
if(result.message.image)
{
$('.image_error').html(result.message.image[0]);
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



    </script>
    
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTA8Bzb3dluQ1AlqdVjjPI-euEt5_8eN0&libraries=places&callback=initMap"

      ></script>
       
        @endsection