<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
    <script src="{{asset('materialize/js/materialize.min.js')}}"></script>

    <title>@yield('title')</title>
</head>
<body>
    <div id="wrapper">
        @yield('content')
    </div>
</body>
</html>