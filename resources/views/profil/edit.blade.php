@extends('layouts.main')
@section('content')
<div>
  
    <form action="/profil/edit/simpan" method="post">
      @csrf

      {{-- upload Foto --}}
      <div class="avatar-upload">
          <div class="avatar-edit">
              <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
              <label for="imageUpload"></label>
          </div>
          <div class="avatar-preview">
              <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
              </div>
          </div>
      </div>

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
