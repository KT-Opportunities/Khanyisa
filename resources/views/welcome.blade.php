<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/ico" href="{{ asset('img//logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Khanyisa | Login</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 left">
            <img class="bg" src="{{ asset('img/bg.png') }}" alt="Image" />
                <div class="box"></div>
                <div class="box2"></div>
                <div class="box1"></div>
                @if(isset(Auth::user()->email))
    <script>window.location="successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
                <form class="" method="POST" action="{{ url('/checklogin') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <img class="logo" src="{{ asset('img/logo.png') }}" alt="Image" />
                <p class="tag">Please enter your email address and password to begin.</p>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="field-style field-split align-center" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="field-style field-split align-center" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                            
                                <button type="submit" class="logBtn">
                                    Login
                                </button></br>

                                <a class="passLink" href="{{ route('password.request') }}">
                                Can’t remember your password?
                                </a><br><br>
                                <a class="passLink2" href="{{ route('register') }}">Register</a>
                            
                       
                    </form>

            </div>
            <div class="col-md-8 col-sm-8 right">
                <img src="{{ asset('img/login.png') }}" alt="Image" />

            </div>

        </div>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
