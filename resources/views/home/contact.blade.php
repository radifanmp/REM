@extends('layouts.main')

@section('title',"Contact")
    

@section('content')
<style>

</style>
    <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">HUBUNGI KAMI</h5>
    <hr class="style-one" style="margin-bottom:79px;">

    <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa ad reiciendis blanditiis similique fuga dolorum. 
            Repudiandae asperiores aut officia id cum iste deserunt, natus ex est explicabo. In, ipsam, accusamus.</p>
            
            <div class="row">
                <form class="col s12">
                  <div class="row">

                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="nama" type="text" class="validate">
                      <label for="nama">Nama</label>
                    </div>

                    <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                      <span class="helper-text" data-error="Salah" data-success="Benar"></span>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">error_outline</i>
                        <input id="judul" type="text" class="validate">
                        <label for="judul">Persoalan</label>
                    </div>

                    <div class="input-field col s12">
                            <i class="material-icons prefix">border_color</i>
                            <textarea id="pesan" class="materialize-textarea"></textarea>
                            <label for="pesan">Pesan</label>
                    </div>

                    <div class="row col s4">
                     <button class="btn waves-effect waves-light s4" type="submit" name="kirim"  style="background-color: #2E3638; width: 100%;">Kirim</button>
                    </div>

                  </div>
                </form>
              </div>
@endsection