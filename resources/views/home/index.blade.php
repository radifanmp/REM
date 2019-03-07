@extends('layouts.main')

@section('title',"Home")

@section('content')

<h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">PILIH ACARA KE AGAMAAN MU</h5>
    <hr class="style-one"  style="margin-bottom:79px;">

<section id="home-agama">

  <div class="row">

    @foreach ($dataAgama as $agama)
    <div class="col s4" style="padding:10px 10px;">
      <div class="card" style="border-radius:10px">
        <div class="card-image waves-effect" style="border-radius:10px">
          <img class="activator" src="{{ $agama->gambar_agama }}">
        </div>
      </div>
    </div>    
    @endforeach  

    <div id='map' style='width: 400px; height: 300px;'></div>

  </div>

</section>
@endsection