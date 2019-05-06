<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Title -->
    <title>Ticketwent</title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="./img/core-img/favicon.png"> -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>
<style>
/*div.img-resize img{*/
    /*width: 100px;*/
    /*height: auto;*/
/*}*/
div.img-resize{
    width: 238px;
    height: 350px;
    overflow: hidden;
}
</style>


<body style="background-color: #151853;">
@include('layoutusers._navbar')
@yield('content')
<!-- Preloader -->
<!-- <div id="preloader">
    <div class="loader"></div>
</div> -->

<!-- /Preloader -->


</body>
</html>
