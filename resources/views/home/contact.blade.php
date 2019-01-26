@extends('layouts.main')

@section('title',"Contact")
    

@section('content')
<style>

</style>
    <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">HUBUNGI KAMI</h5>
    <hr class="style-one"  style="margin-bottom:79px;">

    <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa ad reiciendis blanditiis similique fuga dolorum. 
            Repudiandae asperiores aut officia id cum iste deserunt, natus ex est explicabo. In, ipsam, accusamus.</p>
            
            <div class="row">

              {{-- form --}}

                <form class="col s12">
                  <div class="row">
                    
                    <div class="col s2">
                        <i class="small material-icons" style="color: #2E3638;">map</i><br>
                        <label style="font-size: 20px; color: #2E3638; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ALAMAT</label><br>
                        <p style="font-size: 12px; color: #2E3638; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Perum Griya Alam Sentosa
                        Brok R1 No 9 Cileungsi, Bogor</p>
                    </div>

                    <div class="col s1">
                    </div>

                    <div class="input-field col s5">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="nama" type="text" class="validate">
                      <label for="nama">Nama</label>
                    </div>

                    <div class="input-field col s4">
                      <i class="material-icons prefix">email</i>
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                      <span class="helper-text" data-error="Salah" data-success="Benar"></span>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col s2">
                        <i class="small material-icons" style="color: #2E3638;">local_phone</i><br>
                        <label style="font-size: 20px; color: #2E3638; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">TELEPON</label><br>
                        <p style="font-size: 12px; color: #2E3638; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">083896833133</p><br>          
                    </div>

                    <div class="col s1">
                      </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">error_outline</i>
                        <input id="judul" type="text" class="validate">
                        <label for="judul">Persoalan</label>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col s2">
                        <i class="small material-icons" style="color: #2E3638;">mail_outline</i><br>
                        <label style="font-size: 20px; color: #2E3638; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">EMAIL</label><br>
                        <p style="font-size: 12px; color: #2E3638; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><a href="mailto:radifanmp@gmail.com?Subject=[FEEDBACK]&body=body=Your+awesome+message+goes+here.%0D%0A%0D%0AThis+is+on+a+new+line.+Go+to+http%3A%2F%2Fwww.google.com%2F." target="_top">radifamp@gmail.com</a></p>
                    </div>

                    <div class="col s1">
                      </div>

                    <div class="input-field col s9">
                            <i class="material-icons prefix">border_color</i>
                            <textarea id="pesan" class="materialize-textarea"></textarea>
                            <label for="pesan">Pesan</label>
                    </div>

                    <div class="row col s12 center-align">
                      <button class="btn waves-effect waves-light s4" type="submit" name="kirim"  style="background-color: #2E3638; width: 30%; border-radius:30px;">Kirim</button>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
@endsection