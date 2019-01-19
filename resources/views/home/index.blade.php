@extends('layouts.main')

@section('content')
{{-- menu --}}
<nav>
    <div class="nav-wrapper">
      <a style="padding-right: 50px" href="#" class=" right">Login</a>
      <a style="padding-right: 50px" href="#" class=" right">Daftar</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

@endsection