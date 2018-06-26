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
    <link rel="icon" type="image/png" sizes="16x16" href="/plugins/images/favicon.png">
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
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
@if(Auth::check() && !\Request::is('login'))
    <div id="wrapper">
        <!-- Navigation -->
    @include('layouts.partials.topbar')

    @if (!$isErrorPage)
        <!-- Left navbar-header -->
        @include('layouts.partials.sidebar')
        <!-- Left navbar-header end -->
    @endif

    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@else
    <section id="wrapper" class="login-register custom-login">
        @yield('content')
    </section>
@endif
@stack('modals')
<!-- /#wrapper -->
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/sb-admin.js') }}"></script>
<script src="{{ mix('/js/sb-admin-charts.js') }}"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
@stack('scripts')
@yield('footer')
</body>
</html>
