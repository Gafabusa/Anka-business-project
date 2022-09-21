@extends('Master');
@section("content")
<form class="signup-form" action="/register" method="post">
<div class="form-body">
<div class="horizontal-group">
    <div class="form-group left">
        <label for="firstname" class="label-title">First name </label>
        <input type="text" id="firstname" class="form-input">
    </div> </br>
    <div class="form-group right">
        <label for="lastname" class="label-title">Last name</label>
        <input type="text" id="lastname" class="form-input">
    </div> </br>
</div>
</div>
<!-- Email -->
<div class="form-group">
  <label for="email" class="label-title">Email </label>
  <input type="email" id="email" class="form-input">
</div> </br>

<!-- Password and confirm password -->
<div class="horizontal-group">

  <div class="form-group left">
    <label for="password" class="label-title">Password </label>
    <input type="password" id="password" class="form-input">
  </div> </br>

  <div class="form-group right">
    <label for="confirm-password" class="label-title">Confirm Password </label>
    <input type="password" class="form-input" id="confirm-password" >
  </div>
</div> </br>
<button type="submit" class="btn">Login</button>
    </form>
@endsection
