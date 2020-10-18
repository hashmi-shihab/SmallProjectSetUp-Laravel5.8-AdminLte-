<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dream Door Realty Service</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/bower_components/select2/dist/css/select2.min.css')}}">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

@include('publicView._mobileHeader')


@include('publicView._header')

@include('publicView._driftChatBoot')


@yield('content')


@include('publicView._footer')



<!-- Js Plugins -->
<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
{{--<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>--}}
<script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

@yield('jsscript')

</body>

</html>


