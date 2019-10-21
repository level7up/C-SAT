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
                                    <h4 class="card-title"> Log In</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                                </div>
                                            </div>
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Adress" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                

                                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                                </div>
                                            </div>
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    

                                    <div class="input-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-info btn-round btn-lg">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
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

</body>





@endsection


