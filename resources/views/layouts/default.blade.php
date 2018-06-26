<?php
/**
 * Created by PhpStorm.
 * User: kevingiroux
 * Date: 26/06/2018
 * Time: 16:43
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ getenv('APP_NAME') }}</title>

    <!--Static StyleSheets-->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/sb-admin.css') }}">
    <!--Dynamic StyleSheets added from a view would be pasted here-->
    @yield('styles')

    <style>

    </style>
@yield('header')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
@if(Auth::check() && !\Request::is('login'))
    <!-- Navigation -->
    @include('layouts.partials.nav')
    <!-- Page Content -->
    <div class="content-wrapper">
        <div class="container-fluid">
                @yield('content')
        </div>
        @include('layouts.partials.footer')
    </div>

@else
    <section id="wrapper" class="login-register custom-login">
        @yield('content')
    </section>
@endif

<!-- /#wrapper -->
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/sb-admin.js') }}"></script>

<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

</body>
</html>
