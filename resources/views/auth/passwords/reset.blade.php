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

<form method="POST" action="{{ route('password.update') }}">
 @csrf

    <div class="Register-form">
     
      <div class="form-title">
      {{ __('Reset Password') }}
      </div>

      <input type="hidden" name="token" value="{{ $token }}">
      
      <div class="form-input">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
      </div>
      
      <div class="form-input">
        <label for="password">Password</label> 
        <input id="password" type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <i class="toggle-password fa fa-fw fa-eye-slash" style=" float: right; position: relative;  margin-right: 10px; margin-top: -25px; cursor: pointer;"></i>
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
      </div>

      <div class="form-input">
        <label for="password">Confirm Password</label>
        <input id="password-confirm" class="form-control" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <i class="toggle-password fa fa-fw fa-eye-slash" style="float: right;cursor: pointer;margin-right: 10px;margin-top: -25px;"></i>
      </div> 
 
      <div class="form-input">
        <button id="login-btn" type="submit" class="form-control">{{ __('Reset Password') }}</button>
       
        <br>

      </div>
      <div class="link-to-register">
     
      </div>
    
      </form>

</body>
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
</html>

