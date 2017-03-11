<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Zhen Chen" />
    <meta name="keywords" content="{{ $keywords }}" />

    <title>{{ $title }}</title>

    <link rel="canonical" href="{{ $canonical }}" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/weather-icons.min.css" />
    <link rel="stylesheet" href="/css/weather-icons-wind.min.css" />
    <link rel="stylesheet" href="/css/main.css" />

    @yield('head')
</head>
<body>
    @include('layouts.analytics')

    <div id="body">
    @yield('body')
    </div>

    @section('footer')
    @include('layouts.footer')
    @show

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

    @yield('foot')
</body>
</html>
