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
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

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
<script src="{{ mix('js/app.js') }}"></script>

<script>

</script>



</html>