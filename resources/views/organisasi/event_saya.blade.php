@extends('layouts.main')
@section('content')

    <div>
            <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">ORGANISASI SAYA</h5>
            <hr class="style-one"  style="margin-bottom:79px;">
        
        <div class="row">
            <div class="col s3">

                <div style= "margin:15px;"><a href="/#/" class="waves-effect waves-light btn grey darken-3" style="border-radius:15px;">Buat Organisasi</a></div>
        
            </div>

            <div class="col s3">

            </div>

            <div class="col s3" style="float:right;">
            <div class="input-field">
                    <i class="material-icons prefix">search</i>
                    <input id="judul" type="search">
                    <label for="search">Cari Organisasi</label>
                </div>
            </div>
            </div>
        </div>
        @if ($data)
            @foreach ($data as $org)
            
            <div class="row">
                <div class="col s6">

                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s3">
                                <img src="{{ $org->gambar_organisasi}}" class="circle responsive-img" style="width:100px;height:100px;"><br>
                            </div>

                            <div class="col s1">

                            </div>

                            <div class="col s8">
                                <strong style="font-size: 20pt;">{{ $org->nama_organisasi }}</strong><br>
                                <span>{{ $org->alamat_organisasi }}</span><br>
                                <span>Berdiri Sejak, {{ $dateHelper->convertDateIndo($org->created_date,['bulan','tahun']) }}</span><br>
                                <span>{{ $org->nama_kabupaten }}, {{ $org->nama_provinsi }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @endforeach
        @else
        <div class="row">
            <div class="col s12 center-align">
                <img src="{{ $notfound }}" alt="Not Found">
            </div>
        </div>
        @endif

    </div>

@endsection