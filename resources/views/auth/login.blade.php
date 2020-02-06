@extends('layouts.app')

@section('content')
  <div class="new-login-box" style="margin-left: auto; margin-right: auto;">
    <div class="white-box">
      <h3 class="box-title m-b-0">Sign In to Admin</h3>
      <small>Enter your details below</small>
      <form class="form-horizontal new-lg-form" id="loginform" method="POST" action="/login">
        {{ csrf_field() }}

        <div class="form-group  m-t-20">
          <div class="col-xs-12">
            <label>Email Address</label>
            <input class="form-control" name="email" type="text" id="email" required="" placeholder="Username">
            @if($errors->has('email'))
                <small class="help-block">{{ $errors->first('email') }}</small>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <label>Password</label>
            <input class="form-control" name="password" type="password" id="password" required="" placeholder="Password">
            @if($errors->has('password'))
                <small class="help-block">{{ $errors->first('password') }}</small>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-info pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox" name="remember">
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
      </form>
      <form class="form-horizontal" id="recoverform" action="index.html">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
@endsection