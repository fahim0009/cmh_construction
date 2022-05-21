<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link name="favicon" type="image/x-icon" href="{{ asset(\App\Models\CompanyDetail::first()->fav_icon) }}" rel="shortcut icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMH</title>
    <link rel="icon" href="{{ asset('assets/images/favi.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('css')
</head>

<body>
    

        <!-- header part  -->


   
    @include('frontend.inc.header')
	

	@yield('content')

    @include('frontend.inc.footer')




    

    <!-- footer part here  -->
    
    <script src="{{ asset('assets/js/bootstrap-5.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/iconify.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    @yield('script')
</body>

</html>