@extends('layouts.app')

@section('content')
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/login/css/style.css">

  </head>
  <body>
  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6 text-center mb-2">
                  <h2 class="heading-section">Iniciar Sesion Administrativo</h2>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-md-12 col-lg-10">
                  <div class="wrap d-md-flex">
                      <div class="img" style="background-image: url(images/bg-1.jpg);">
                      </div>
                      <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                        <div class="w-100">
                        <h3 class="mb-4">Logearse</h3>
                        </div>
                              <div class="w-100">
                                  <p class="social-media d-flex justify-content-end">
                                      <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                      <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                  </p>
                              </div>
                    </div>
                          <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf
                            <div class="form-group">
                            <label class="label" for="email">{{ __('Correo Electronico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                  <div class="form-group">
                      
                      <label for="password" class="label" required="" placeholder="Contraseña">{{ __('Contraseña') }}</label>

                    
                 <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                 </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recuerdame') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Iniciar Sesión') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link col-md-0" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña Ingeniero?') }}
                            </a>
                        @endif
                    </div>
                </div>
              </form>
              </div>
             </div>
              </div>
          </div>
      </div>
  </section>

  <script src="js/login/js/jquery.min.js"></script>
<script src="js/login/js/popper.js"></script>
<script src="js/login/js/bootstrap.min.js"></script>
<script src="js/login/js/main.js"></script>
</body>
</html>

@endsection
