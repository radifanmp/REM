@extends('layouts.main')
@section('content')

<div>
        <div style= "margin:15px;"><a href="/org/me" class="waves-effect waves-light btn grey darken-3" style="border-radius:15px;"><i class="fas fa-hand-point-left" style="font-size:20px;"></i>&nbsp;&nbsp; Kembali</a></div>
    <h1 class="center-align">Tambah Organisasi</h1>

    <form action="#" method="POST">
        @csrf
        <div class="row">
            <div class="col s2">
                Nama Organisasi
            </div>
            <div class="col s10">
                <input required type="text" name="nama_organisasi">
            </div>
        </div>

        <div class="row">
            <div class="col s2">
                Agama
            </div>
            <div class="col s10">
                <select required name="agama" id="agama">
                    <option value="">--PILIH--</option>
                    @foreach ($listAgama as $agama)
                        <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s2">
                Provinsi
            </div>
            <div class="col s10">
                <select required name="provinsi" id="provinsi">
                    <option value="">--PILIH--</option>
                    @foreach ($listProvinsi as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama_wilayah }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s2">
                Alamat Organisasi
            </div>
            <div class="col s10">
                <textarea required name="alamat_koperasi" class="materialize-textarea" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col center-align s12">
                <button type="submit">Simpan</button>
            </div>
        </div>
    </form>
</div>

@endsection