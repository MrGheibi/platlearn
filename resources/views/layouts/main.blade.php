<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پلت لرن | آموزش برنامه نویسی</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <script src="{{ asset('js/JavaScript.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body dir="rtl" x-data="sidebar()"
      class="dark:bg-gray-900 transition duration-300
       ease-in bg-gray-100 dark:text-white scroller">
<div id="Header">
    @include('layouts.header')
</div>

<div id="Content">
    @yield('content')
</div>
@include('layouts.footer')


@include('layouts.Sidebar')
<script src="{{ asset('js/alpine.js') }}"></script>
@livewireScripts
</body>
</html>
