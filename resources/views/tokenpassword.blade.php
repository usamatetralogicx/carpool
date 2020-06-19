@extends('layouts.app')
@push('styles')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
    .inline_input{
        padding: 0 !important;
        font-size: 20px !important;
    }
    .input_wrapper{position:relative}
.plastic_select, input[type=url], input[type=text], input[type=tel], input[type=number], input[type=email], input[type=password], select, textarea {
    font-size: 1.25rem;
    line-height: normal;
    padding: .75rem;
    border: 1px solid #C5C5C5;
    border-radius: .25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: 0;
    color: #555459;
    width: 100%;
    max-width: 100%;
    font-family: Slack-Lato,appleLogo,sans-serif;
    margin: 0 0 .5rem;
    -webkit-transition: box-shadow 70ms ease-out,border-color 70ms ease-out;
    -moz-transition: box-shadow 70ms ease-out,border-color 70ms ease-out;
    transition: box-shadow 70ms ease-out,border-color 70ms ease-out;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    box-shadow: none;
    height: auto;
}
.no_touch .plastic_select:hover,.no_touch input:hover,.no_touch select:hover,.no_touch textarea:hover{border-color:#2780f8}
.focus,.plastic_select:active,.plastic_select:focus,input[type=url]:active,input[type=url]:focus,input[type=text]:active,input[type=text]:focus,input[type=number]:active,input[type=number]:focus,input[type=email]:active,input[type=email]:focus,input[type=password]:active,input[type=password]:focus,select:active,select:focus,textarea:active,textarea:focus{border-color:#2780f8;box-shadow:0 0 7px rgba(39,128,248,.15);outline-offset:0;outline:0}

.large_bottom_margin {
    margin-bottom: 2rem!important;
}
.split_input{display:table;border-spacing:0}
.split_input_item{display:table-cell}
.split_input_item:not(:first-child){border-left:none}
.split_input_item:first-child{border-top-left-radius:5px;border-bottom-left-radius:5px}
.split_input_item:last-child{border-top-right-radius:5px;border-bottom-right-radius:5px}
.split_input_item.focused{border:1px double #2780f8;box-shadow:0 0 7px rgba(39,128,248,.3)}
.split_input_item input{height:5rem;text-align:center;font-size:2.5rem;border:none;background:0 0;box-shadow:none}
.split_input_item input:active,.split_input_item input:focus,.split_input_item input:hover{box-shadow:none}


.fs_split{position:absolute;overflow:hidden;width:100%;top:0;bottom:0;left:0;right:0;background-color:#e8e8e8;-webkit-transition:background-color .2s ease-out 0s;-moz-transition:background-color .2s ease-out 0s;transition:background-color .2s ease-out 0s}
.fs_split h1{font-size:2.625rem;line-height:3rem;font-weight:300;margin-bottom:2rem}
.fs_split label{margin-bottom:.5rem}
.fs_split .desc{font-size:1.25rem;color:#9e9ea6;margin-bottom:2rem}
.fs_split .email{color:#555459;font-weight:700}
.fs_split .header_error_message{margin:0 11%;padding:1rem 2rem;background:#fff1e1;border:none;border-left:.5rem solid #ffa940;border-radius:.25rem}
.fs_split .header_error_message h3{margin:0}
.fs_split .error_message{display:none;font-weight:700;color:#ffa940}
.fs_split .error input,.fs_split .error textarea{border:1px solid #ffa940;background:#fff1e1}
.fs_split .error input:focus,.fs_split .error textarea:focus{border-color:#fff1e1;box-shadow:0 0 7px rgba(255,185,100,.15)}
.fs_split .error .error_message{display:inline}
.confirmation_code_span_cell{display:table-cell;font-weight:700;font-size:2rem;text-align:center;padding:0 .5rem;width:2rem}
.confirmation_code_state_message{position:absolute;width:100%;opacity:0;-webkit-transition:opacity .2s;-moz-transition:opacity .2s;transition:opacity .2s}
.confirmation_code_state_message.error,.confirmation_code_state_message.processing,.confirmation_code_state_message.ratelimited{font-size:1.25rem;font-weight:700;line-height:2rem}
.confirmation_code_state_message.processing{color:#3aa3e3}
.confirmation_code_state_message.error,.confirmation_code_state_message.ratelimited{color:#ffa940}
.confirmation_code_state_message ts-icon:before{font-size:2.5rem}
.confirmation_code_state_message svg.ts_icon_spinner{height:2rem;width:2rem}
.confirmation_code_checker{position:relative;height:12rem;text-align:center}
.confirmation_code_checker[data-state=unchecked] .confirmation_code_state_message.unchecked,.confirmation_code_checker[data-state=error] .confirmation_code_state_message.error,.confirmation_code_checker[data-state=processing] .confirmation_code_state_message.processing,.confirmation_code_checker[data-state=ratelimited] .confirmation_code_state_message.ratelimited{opacity:1}
.large_bottom_margin {
    margin-bottom: 2rem !important;
}


</style>
@section('content')
@include('partials.header')
<section class="inner-banner">
            <div class="container">
                
                <h2 class="text-center" style="color: white">Email Verification</h2>
            </div><!-- /.container -->
        </section>
<section class="contact-form-style-one  book-ride-two ">
    <div class="container ">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Verification</p>
        </div><!-- /.block-title -->
       
        <form action="{{url('newpassword')}}" class="contact-form-one row booking-form-two" id="
            contact-form" method="post">
            @csrf
          <input type="hidden" name="user_id" value="{{$verify->user_id}}">
                <div class="row">
    <div class="col-sm-7 offset-sm-6" >
         @if(Session::has('email_confirmation'))
<p class="alert alert-info">{{ Session::get('email_confirmation') }}</p>
@endif<!-- col -->
        <h2><h1>Check your email!</h1></h2>
        <p class="desc">We’ve sent a six-digit confirmation code to <strong>your email</strong> Enter it below to confirm your email verification</p>
        <br>
       <label><span class="normal">Your </span>confirmation code</label>
         
                <div class="confirmation_code_group" >
                    <input type="text" name="token" maxlength="4" placeholder="Enter token here" class="form-control">
                  <!--   <div class="split_input_item input_wrapper"><input  type="text" class="inline_input" maxlength="1"></div>
                    <div class="split_input_item input_wrapper"><input type="text" class="inline_input" maxlength="1"></div>
                    <div class="split_input_item input_wrapper"><input type="text" class="inline_input" maxlength="1"></div>
                    <div class="split_input_item input_wrapper"><input type="text" class="inline_input" maxlength="1"></div> -->

         
               
            </div>
           <div class="col-md-12">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <a href="{{url('/#')}}"><button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Submit</span></button></a>
                </div><!-- /.input-holder -->
            </div>
       </div>
            </div><!-- endof col -->
    </div>
           
        </form><!-- /.contact-form-one -->
    </div><!-- /.container -->
    
</section>
@include('partials.footer')
@endsection
@push('scripts')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>