<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
</head>
<body>
@section('header')
    @include('layouts.header')
@show
<div class="container">
    @yield('main')
</div>
@section('footer')
    @include('layouts.footer')
@show
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
</html>