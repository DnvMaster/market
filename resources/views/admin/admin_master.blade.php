<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ __('Администрирование') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ __('Market.loc задуман как прототип онлайн‑маркетплейс')}}">
        <meta name="keywords" content="{{ __('PHP 8.2, Composer, OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, MySQL') }}">
        <meta name="author" content="{{ __('Mikolai Dziamko') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" id="app-style">
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/toastr.css') }}" rel="stylesheet" >
    </head>
    <body data-menu-color="light" data-sidebar="default">
        <div id="app-layout">
            @include('admin.body.header')
            @include('admin.body.sidebar')
            <div class="content-page">
                <div class="content">
                    @yield('admin')
                </div>
                @include('admin.body.footer')
            </div>
        </div>
        <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('backend/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('backend/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('backend/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
        <script src="{{ asset('backend/js/pages/analytics-dashboard.init.js') }}"></script>
        <script src="{{ asset('backend/js/app.js') }}"></script>
        <script src="{{ asset('backend/js/toastr.min.js') }}"></script>
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type','info') }}"
                switch(type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                    break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                    break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                    break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                    break;
                }
            @endif
        </script>
    </body>
</html>