<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('/bootstrap/css/navbar.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/navbar-static-top.css') }}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap-theme.css') }}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    {{--<script src="/bootstrap/js/bootstrap.min.js"></script>--}}



{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <body>

