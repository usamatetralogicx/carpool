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
         <div class="col-sm-5 offset-sm-3"> 
    
  @if(session()->has('message'))
     <p class="alert alert-info">
       {{ session()->get('message')}}
     </p>
     @endif
     </div>

        
    <div class="album py-5 ">
    <div class="container">

      <div class="row">
        @foreach($search as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">{{$product->Departure}}
                <br>
                <i class="fa fa-arrow-circle-o-down fa-2x" style="margin-left: 90px"></i>
              <p class="card-text">{{$product->Arrival}}</p>
              <h4 class="card-text">Fare: {{$product->Fare}}</h4>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-sm btn-outline-secondary" href="{{url('single',$product->id)}}">View</a>
                
                </div>
                <small class="text-muted">{{$product->created_at->diffForHumans()}}</small>
              </div>
            </div>
       
          </div>
        </div>
            @endforeach
          </div>

        </div>
        
      </div>             
                   
            </div><!-- /.container -->
        </section><!-- /.book-ride-two -->
        <!-- /.site-footer -->
    </div>

@include('partials.footer')
@endsection
