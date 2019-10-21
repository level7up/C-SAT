
@extends('layouts.app')

@section('content')

<body class="register-page">

    <div class="wrapper">
        <div class="page-header">
          <div class="page-header-image"></div>
          <div class="content">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6 offset-lg-0 offset-md-3">
                  <div id="square7" class="square square-7"></div>
                  <div id="square8" class="square square-8"></div>
                  <div class="card card-register">
                    <div class="card-header">
                      <img class="card-img" src="../assets/img/square1.png" alt="Card image">
                      <h4 class="card-title">Register</h4>
                    </div>
                    <div class="card-body">
                      <form class="form"  method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                        {{-- FULL NAME --}}
                        <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-single-02"></i>
                            </div>
                          </div>
                          <input placeholder="Full Name" id="name" type="text" class="form-control" name="name" required autofocus>

                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>

                        {{-- EMAIL --}}

                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input placeholder="Email" id="email" type="text" class="form-control" name="email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>


                        {{-- PHONE --}}

                        <div class="input-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input placeholder="Phone" id="phone" type="text" class="form-control" name="phone" required autofocus>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- PASSWORD --}}

                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autofocus>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- CONFIRM PASSWORD --}}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input id="password-confirm" placeholder="Confirm Password"  type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-check text-left">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>
                            I agree to the
                            <a href="javascript:void(0)">terms and conditions</a>.
                          </label>
                        </div>

                        {{-- Submit --}}
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info btn-round btn-lg">
                                    Register
                                </button>
                            </div>
                      </form>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="register-bg"></div>
              <div id="square1" class="square square-1"></div>
              <div id="square2" class="square square-2"></div>
              <div id="square3" class="square square-3"></div>
              <div id="square4" class="square square-4"></div>
              <div id="square5" class="square square-5"></div>
              <div id="square6" class="square square-6"></div>
            </div>
          </div>
        </div>
    </div>
@endsection


{{--    
         ############ OLD SIGN UP #############


<div class="container">
    <div class="row py-5 ">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('[phone]') }}" required autofocus>

                                @if ($errors->has('[phone]'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

 --}}


