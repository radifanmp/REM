@extends('layouts.main')
@section('content')
<div>
    <label for="">Nama Lengkap</label>
    <input type="text" value="{{ $data->nama }}" >

    <label for="">Username</label>
    <input type="text" value="{{ $data->user->username }}">

    <label for="">Email</label>
    <input type="email" value=""class="validate">
    <span class="helper-text" data-error="Salah" data-success="Benar"></span>

    <label>Agama
        <select>
          <option value="" disabled selected>Pilih</option>
          <option value="1">Islam</option>
          <option value="2">Katolik</option>
          <option value="3">Protestan</option>
          <option value="3">Hindu</option>
          <option value="3">Buddha</option>
          <option value="3">Kong Hu Cu</option>
        </select>
    </label>

    <label>Jenis Kelamin
    <select>
      <option value="" disabled selected>Pilih</option>
      <option value="1">Laki-laki</option>
      <option value="2">Perempuan</option>
    </select>
    </label>

    <label for="">Nomor Telepon</label>
    <input type="text" value="">

    <label for="pesan">Alamat</label>
    <textarea id="pesan" class="materialize-textarea"></textarea>

    
</div>
@endsection