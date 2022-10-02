<!DOCTYPE html>
<html>
  <head>
    <title>Geek Bot</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href="{{asset('template2/stylesheets/bootstrap.css')}}" >
    <link rel='stylesheet' href="{{asset('template2/stylesheets/style.css')}}" />
  </head>
  <body class="login">
    
    <div class="row">
      <div class="col-md-4">
          <div class="head">
              <h1 style="color:white;">Geek Bot</h1>
              <h2 style="color:white;">Log In</h2>
          </div>
      </div>
      <div class="col-md-4">
          <div class="form-style">
            <center>
              <h1 style="color:white">Log In</h1>
              <img src="{{asset('template2/images/Login.png')}}" width="200" style="margin-bottom: 20px;">
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row" style="margin-bottom: 10px; display: flex; flex-direction: column; align-items: center;">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color:white;">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 20px; display: flex; flex-direction: column; align-items: center;">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-white" style="color:white;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row" style="margin-bottom: 6px;">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:white;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="row mb-0" style="display: flex; justify-content: center;">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Log In') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
            </center>        
          </div>
      </div>
    </div>
   
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="{{asset('template2/javascripts/jquery-3.1.0.js')}}"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="{{asset('template2/javascripts/bootstrap.js')}}"></script>
  </body>
</html>