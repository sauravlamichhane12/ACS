<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=<device-width>, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/bf2d190e3d.js" crossorigin="anonymous"></script>
<script src="https://js.hcaptcha.com/1/api.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pwstrength-bootstrap/2.2.1/pwstrength-bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
<div class="login-wrapper">
<form method="POST" action="{{ route('register') }}">
                        @csrf
    <div class="Register-form">
      <div class="form-title">
        Registration
      </div>
      <div class="form-input">
        <label for="username">Username</label>
        <input type="text" id="username" class="form-control" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-input">
        <label for="email">Email</label>
        <input type="email" id="email" class="form-control"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
        @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      
      <div class="form-input">
        <label for="password">Password</label> 
       <input type="password" id="password" @error('password') is-invalid @enderror" name="password" class="form-control" required autocomplete="new-password">
       <i class="toggle-password fa fa-fw fa-eye-slash" style=" float: right; position: relative;  margin-right: 10px; margin-top: -25px; cursor: pointer;"></i>
       <div class="pwstrength_viewport_progress"></div>
       <div id="messages" class="col-sm-12"></div>
       
        @error('password')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
      @enderror
      </div>
      <div class="form-input">
        <label for="password">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <i class="toggle-password fa fa-fw fa-eye-slash" style="float: right;cursor: pointer;margin-right: 10px;margin-top: -25px;"></i>
      </div>
      <div class="form-group">
        <label for="captcha">Captcha</label>
          {!! NoCaptcha::renderJs() !!}
          {!! NoCaptcha::display() !!}
          @error('g-recaptcha-response')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
      </div>
 
      <div class="form-input">
        <button id="login-btn" type="submit" class="form-control">Registration</button>
        
        <div class="mt-1">

          <a href="{{ url('/customer/login') }}" style="float:Right; text: size 25px;"> Already have an account? Login Here</button></a>
        </div>

      </div>
      <div class="link-to-register">
     
      </div>
    
</form>
</div>
   
   <script>
jQuery(document).ready(function () {
"use strict";
var options = {};
options.ui = {
bootstrap4: true,
container: "#pwd-container",
viewports: {
progress: ".pwstrength_viewport_progress"
},
showVerdictsInsideProgressBar: true
};
options.common = {
debug: true,
onLoad: function () {
//$('#messages').text('Start typing password');
}
};
$(':password').pwstrength(options);
});
   </script>
   <script>
  $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
  </script>
</body>
</html>

