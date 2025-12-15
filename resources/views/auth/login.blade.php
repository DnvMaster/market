<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Вход в систему ') }}</title>
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" id="app-style">
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet">
  </head>
   <body class="bg-white">
    <div class="account-page">
      <div class="container-fluid p-0">
        <div class="row align-items-center g-0">
          <div class="col-xl-5">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                  <div class="mb-4 p-0">
                    <a href="{{ url('/') }}" class="auth-logo">
                      <img src="{{ asset('backend/images/logo-dark.png') }}" alt="logo-dark" class="mx-auto" height="28">
                    </a>
                  </div>
                  <div class="pt-0">
                    <form action="{{ route('login') }}" method="POST" class="my-4">
                      @csrf
                      <div class="form-group mb-3">
                        <label for="email" class="form-label">{{ __("Електронный адрес") }}</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="{{ __("Введите электронный адрес") }}">
                      </div>

                      <div class="form-group mb-3">
                        <label for="password" class="form-label">{{ __('Ваш пароль') }}</label>
                        <input class="form-control" type="password" name="password" id="password">
                      </div>
                
                      <div class="form-group d-flex mb-3">
                        <div class="col-sm-6">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked name="remember">
                            <label class="form-check-label" for="checkbox-signin">{{ __('Запомнить') }}</label>
                          </div>
                        </div>
                        <div class="col-sm-6 text-end">
                           @if (Route::has('password.request'))
                            <a class='text-muted fs-14' href='{{ route('password.request') }}'>{{ __('Забыли пароль?') }}</a>
                          @endif                             
                        </div>
                      </div>                        
                      <div class="form-group mb-0 row">
                        <div class="col-12">
                          <div class="d-grid">
                            <button class="btn btn-primary" type="submit"> {{ __('Войти') }} </button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="saprator my-4"><span>{{ __('или войдите через') }}</span></div>
                    <div class="text-center text-muted mb-4">
                      <p class="mb-0">{{ __("У вас нет аккаунта?") }}<a class='text-primary ms-2 fw-medium' href='{{ route('register') }}'>{{ __('Зарегистрируйтесь') }}</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7">
            <div class="account-page-bg p-md-5 p-4">
              <div class="text-center">
                <h3 class="text-dark mb-3 pera-title">{{ __('Вход в систему управления') }}</h3>
                <div class="auth-image">
                  <img src="{{ asset('backend/images/authentication.svg') }}" class="mx-auto img-fluid"  alt="images">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/js/app.js') }}"></script>
  </body>
</html>