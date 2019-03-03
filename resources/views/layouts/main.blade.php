<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('materialize/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="{{asset('bs/js/jqry.min.js')}}"></script>
    <script src="{{asset('materialize/js/materialize.min.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body>
<main>    
    {{-- menu --}}
<nav class="transparent">
        <div class="nav-wrapper">
          {{-- <div class="container"> --}}
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/index">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
          @if (!( Session::has('is_login') && ( Session::get('is_login') == true) ) )
          {{-- LOGIN & DAFTAR MENU START --}}
            <ul id="nav-mobile2" class="right hide-on-med-and-down">
              <li>
                <i class="tiny material-icons">person_add</i>
              </li>

              <li>
                <a href="#daftar" class="modal-trigger" id="menu-daftar">Daftar</a>
              </li>

              <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
              
              <li>
                <i class="tiny material-icons">input</i>
              </li>
              <li>
                <a href="#login" class="modal-trigger" id="menu-login">Login</a>
              </li>
          </ul>
          @else 
          <ul id="nav-mobile2" class="right hide-on-med-and-down">
            <li>Hello, {{ Session::get('username') }}</li>
            <li style="display: inline; width: 100px; height: 100px; padding: 10px;">
              <a href="#" id="menu-profil" class="dropdown-trigger" data-target="dd-profil">
                  <img src="/img/dp.png" class="circle responsive-img" style="width:40px; height:40px;">
              </a>
            </li>
          </ul>

          {{-- DropDown --}}
          <ul id="dd-profil" class="dropdown-content">
              <li><a href="#!">Profil</a></li>
              <li><a href="#!">Acara Saya</a></li>
              <li><a href="#">Organisasi Saya</a></li>
              <li class="divider"></li>
              <li><a href="/logout">Keluar</a></li>
            </ul>
          {{-- LOGIN & DAFTAR MENU END --}}
          @endif
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


   
   <div class="row">
    <div class="col s12">
      <div id="wrapper" class="container" style="padding-bottom: 30px;"> 
      @yield('content')
  
   </div>
   </div>
   </div>
  
  <div id="overlay-login" class="blur">
  
  </div>
</main>
    {{-- Login --}}
<div class="modal" id="login">
    <div class="row">
    <h5 class="modal-close">&#10005;</h5>
  
  <div class="modal-content center">
      <h5><b>LOGIN</b></h3>
  <div class="col s3"></div>
    <form action="/login" method="post">
  @csrf
  <div class="input-field col s6">
  <i class="material-icons prefix">person_outline</i>
  <input type="text" name="username" id="username-login">
  <label for="username">Username</label>
  </div><br>
  
  <div class="row"></div>
  <div class="col s3"></div>
  
  <div class="input-field col s6">
  <i class="material-icons prefix">lock</i>
  <input type="password" name="password" id="password">
  <label for="password">Password</label>
  </div><br>
  
  
  <div class="row"></div>
  
  <button class="btn waves-effect waves-light" type="submit" name="login"  style="background-color: #2E3638; width: 30%; border-radius:30px; margin-top: 50px;">Login</button>
    
    </form>
  </div>
  </div>
  </div>
  
  {{-- Daftar --}}
  
  <div class="modal" id="daftar">
    <div class="row">
    <h5 class="modal-close">&#10005;</h5>
  
  <div class="modal-content center">
      <h5><b>DAFTAR</b></h3>
  <form action="/daftar" method="POST">
  @csrf
  <div class="col s3"></div>
  
  <div class="row"></div>
  <div class="col s3"></div>
  
  <div class="input-field col s6">
  <i class="material-icons prefix">perm_identity</i>
  <input type="text" name="username" id="username-daftar">
  <label for="username">Username</label>
  </div><br>
  
  <div class="row"></div>
  <div class="col s3"></div>
  
  <div class="input-field col s6">
  <i class="material-icons prefix">lock</i>
  <input type="password" name="password" id="password-daftar">
  <label for="password">Password</label>
  </div><br>
  
  <div class="row"></div>
  <div class="col s3"></div>
  
  <div class="input-field col s6">
  <i class="material-icons prefix">lock_outline</i>
  <input type="password" name="konfirmasi_password" id="kmpassword">
  <label for="kmpassword">Konfirmasi Password</label>
  </div><br>
  </div><br>
  
  <div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="daftar"  style="background-color: #2E3638; width: 30%; border-radius:30px; margin-top: 50px;">Daftar</button>
  </div>
    </form>
  </div>
  </div>
  </div>

{{-- footer --}}
<footer>
    <div class="page-footer" style="background-color: #4D595D;">
      <div class="left" style="background-color: #2E3638; padding:30px 30px 30px 30px;">
        {{-- <div class="container" style="background-color: #2E3638;"> --}}
          © 2018 <b>REM</b>. ALL RIGHT RESERVED BY <b>RADIFMP</b>
        </div>
          <div class="grey-text text-lighten-4 right valign-wrapper" style="padding-top:20px;padding-right:30px">
            Powered By&nbsp;&nbsp;
            <img id="gambarLaravel" src="{{asset('img/ICON/Laravel-gray.png')}}" style="width:40px;height:40px" alt="" onmouseover="toogleLaravel(true)" onmouseout="toogleLaravel(false)">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <img id="gambarMater" src="{{asset('img/ICON/Materialize-gray.png')}}" style="width:40px;height:40px" onmouseover="toogleMater(true)" onmouseout="toogleMater(false)" alt="">
          </div>
        {{-- </div> --}}
      </div>
    </div>
</footer>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      {{-- slider jumbotron --}}
      <script>
          const slider = document.querySelector('.slider');
          var responsive=Math.floor($(window ).height()*0.4);
          console.log(responsive);
          M.Slider.init(slider, {
              indicators: false,
              height: responsive,
              transition: 500,
              interval: 6000
          });

          function toogleLaravel(state) {
            if(state) {
              $('#gambarLaravel').attr('src','{{asset("img/ICON/Laravel.png")}}');
            }
            else {
              $('#gambarLaravel').attr('src','{{asset("img/ICON/Laravel-gray.png")}}');
            }
          }

          function toogleMater(state) {
            if(state) {
              $('#gambarMater').attr('src','{{asset("img/ICON/Materialize.png")}}');
            }
            else {
              $('#gambarMater').attr('src','{{asset("img/ICON/Materialize-gray.png")}}');
            }
          }

          $(document).ready(function(){
            $('.modal').modal();
             $(".dropdown-trigger").dropdown({
              coverTrigger: false,
              hover: true,
             });           
          });

          $(document).ready(function(){
             $('select').formSelect();
           });
      </script>
      @if(Session::has('message'))
      <script>
        $(document).ready(function() {
            swal({
            title: "{{ Session::get('header', 'Mohon Maaf')}}",
            text: "{{ Session::get('message', 'Terjadi Kesalahan.')}}",
            icon: "{{ Session::get('type', 'error') }}",
            });
        });
      </script>
     @endif
</body>
</html>