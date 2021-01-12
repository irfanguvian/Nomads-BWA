<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('frontend/libraries/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
    <title>Login</title>
</head>
<body>
<div class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We Explore The new <br> Life Much Better</h1>
                    <img src="{{url('Frontend/images/image-login.jpg')}}" alt="" class="w-75 d-none d-sm-flex">
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{url('Frontend/images/Nomads logo.png')}}" alt="" class="w-50 mb-4">
                            </div>
                            <form method="POST" action="{{route('login')}}">
                                @csrf                          
                                 <div class="form-group">
                                  <label for="email">{{ __('E-Mail Address') }}</label>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email" autofocus>
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                 @enderror
                                </div>
                                <div class="form-group">
                                  <label for="password">{{ __('Password') }}</label>
                                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-login btn-block">Sign In</button>
                                <p class="text-center mt-4">
                                    <a href="{{ route('password.request') }}">Saya Lupa Password</a>
                                </p>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
