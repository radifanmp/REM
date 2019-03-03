@extends('layouts.main')

@section('title',"Home")

@section('content')

<section id="home-agama">

  <div class="row">

    @foreach ($dataAgama as $agama)
    <div class="col s4">
      <div class="card" style="border-radius:10px">
        <div class="card-image waves-effect" style="border-radius:10px">
          <img class="activator" src="{{ $agama->gambar_agama }}">
        </div>
      </div>
    </div>    
    @endforeach    
  
  </div>

</section>
@endsection