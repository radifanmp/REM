<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bs/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bs/css/bootstrap-grid.min.css')}}">
    <script src="{{asset('bs/js/jqry.min.js')}}"></script>
    <script src="{{asset('bs/js/bootstrap.min.js')}}"></script>

    <title>@yield('title')</title>
</head>
<body>
    <div id="wrapper">
        @yield('content')
    </div>
    
    <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container">
          © 2014 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>
</body>
</html>