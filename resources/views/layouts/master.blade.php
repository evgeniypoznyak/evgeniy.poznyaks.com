<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evgeniy Poznyak</title>
    <meta property="og:title" content="Evgeniy Poznyak">
    <meta property="og:description" content="Portfolio and Resume, Hire an awesome developer">
    <meta name="description" content="Portfolio and Resume, Hire an awesome developer">
    <meta name="author" content="Evgeniy Poznyak">
    <meta property="og:image" content="{{url('/main-picture/poznye.png')}}">
    <link rel="icon" href="{{url('/favicon.ico')}}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles  -->
    <link async href="{{ mix('css/app.css') }}" rel="stylesheet">
{{--    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-67255534-2', 'auto');
        ga('send', 'pageview');

    </script>--}}

    <style>

        .my-well a {

        }

    </style>
</head>

<body id="my-body">

{{--@include('components.navbar')--}}


@yield('hero-section')



@yield('content')


@include('layouts.footer')


</body>
<!-- Scripts -->
<div id="app"></div>
<script>
    var body = document.querySelector('body');
    body.style.opacity = 0;
</script>
<script async src="{{ mix('js/app.js') }}"></script>



</html>