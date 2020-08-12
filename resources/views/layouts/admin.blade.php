<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title-std73') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>


<body @yield('body-bg')>
    @include('includes.admin.nav-bar')
    <header>
        <!-- Header Start -->
        <!-- Header End -->
    </header>
    <main>

        @yield('content')
        
    </main>

{{-- @include('includes.footer') --}}


    @include('includes.jsplugins')
    @include('includes.admin.bootstrap-js')
</body>
</html>