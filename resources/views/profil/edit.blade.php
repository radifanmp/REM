@extends('layouts.main')
@section('content')
<div>
    <div style= "margin:15px;"><a href="/profil/" class="waves-effect waves-light btn grey darken-3" style="border-radius:15px;"><i class="fas fa-hand-point-left" style="font-size:20px;"></i>&nbsp;&nbsp; Kembali</a></div>
   
    <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">Edit Profil</h5> 
    <hr class="style-one"  style="margin-bottom:79px;">
    <form action="/profil/edit/simpan" method="post" enctype="multipart/form-data">
      @csrf
    <center>
    <div><img src="{{ $data->foto_profil ? asset('storage/' . $data->foto_profil) : '/img/dp.png' }}" class="circle responsive-img" style="width:200px; height:200px;"><br>
    <input type="file" name="foto_profil" style="color:transparent; margin-left:180px;" accept=".png, .jpg, .jpeg"></div>
    </center>
    <br>

    <label for="">Nama Lengkap</label>
    <input type="text" name="nama" value="{{ $data->nama }}" >

    <label for="">Username</label>
    <input type="text" name="username" value="{{ Session::get('username') }}">

    <label for="">Email</label>
    <input type="email" name="email" value="{{ $data->email }}"class="validate">
    <span class="helper-text" data-error="Salah" data-success="Benar"></span>

    <label>Agama
        <select name="id_agama">
          <option value="" disabled>Pilih</option>
          @foreach ($listAgama as $a)
            <option value="{{$a->id}}" {{ ($data->id_agama == $a->id) ? 'selected' : '' }}>{{ ucwords(strtolower($a->nama_agama)) }}</option>
          @endforeach
        </select>
    </label>

    <label>Jenis Kelamin
    <select name="jenis_kelamin">
      <option value="" disabled selected>Pilih</option>
      <option {{ ($data->jenis_kelamin == 'Laki - Laki') ? 'selected' : '' }} value="Laki - Laki">Laki-laki</option>
      <option {{ ($data->jenis_kelamin == 'Perempuan') ? 'selected' : '' }} value="Perempuan">Perempuan</option>
    </select>
    </label>

    <label for="">Nomor Telepon</label>
    <input type="text" name="no_telp" value="{{ $data->no_telp }}">

    <label for="pesan">Alamat</label>
    <textarea id="pesan" name="alamat" class="materialize-textarea">{{ $data->alamat }}</textarea>
    <div class="row">
      <div class="col s12 center-align">
          <button type="submit" class="waves-effect waves-light btn blue-grey darken-4" style="width: 30%; border-radius:30px;">Simpan</button>
      </div>
    </div>
  </form>
    
</div>
@endsection
