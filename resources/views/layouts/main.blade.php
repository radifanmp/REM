<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('materialize/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="{{asset('materialize/js/materialize.min.js')}}"></script>
    <script src="{{asset('bs/js/jqry.min.js')}}"></script>

    <title>@yield('title')</title>
</head>
<body>
<main>    
    {{-- menu --}}
<nav>
        <div class="nav-wrapper">
          {{-- <div class="container"> --}}
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/index">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
          <ul id="nav-mobile2" class="right hide-on-med-and-down">
          <li><a href="/login" >Login</a></li>
          <li><a href="/daftar" >Daftar</a></li>
          </ul>
        {{-- </div> --}}
        </div>
</nav>  
 {{-- jumbotron/section --}}
 <div class="slider">
        <ul class="slides">
          <li>
          <img src="{{asset('img/jbtrn/jbtrn2.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>


   <div id="wrapper" class="container">
                @yield('content')
   </div>
  
  <div id="overlay-login" class="blur">
  
  </div>
</main>

    {{-- footer --}}
<footer>
    <div class="page-footer" style="background-color: #4D595D;">
      <div class="footer-copyright" style="background-color: #2E3638; padding: 0px 60px;">
        {{-- <div class="container" style="background-color: #2E3638;"> --}}
          © 2018 REM. ALL RIGHT RESERVED BY RADIFMP
        <a class="grey-text text-lighten-4 right" href="https://materializecss.com">Thanks To Materialize</a>
        {{-- </div> --}}
      </div>
    </div>
</footer>

      {{-- slider jumbotron --}}
      <script>
          const slider = document.querySelector('.slider');
          var responsive=Math.floor($(window ).height()*0.33);
          console.log(responsive);
          M.Slider.init(slider, {
              indicators: false,
              height: responsive,
              transition: 500,
              interval: 6000
          });
     </script>
</body>
</html>