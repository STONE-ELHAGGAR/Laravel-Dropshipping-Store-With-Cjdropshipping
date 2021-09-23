<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Home') | Mazzeria LTD</title>	
        <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/favicon.ico')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/chosen.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/color-01.css')}}">
        @yield('additional_headEnd','')
    </head>
<body>
        @include('includes.header')
        @yield('main','')
        @include('includes.footer')
        @yield('additional_bodyEnd','')
        <script src="{{URL::asset('js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
        <script src="{{URL::asset('js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.flexslider.js')}}"></script>
        <script src="{{URL::asset('js/chosen.jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.countdown.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.sticky.js')}}"></script>
        <script src="{{URL::asset('js/functions.js')}}"></script>
</body>
</html>