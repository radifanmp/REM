@extends('layouts.main')
@section('content')

    <div>
        <h1 style="text-align:center">Organisasi Saya</h1>
        
        <div class="row">
            <div class="col s6">
                <a href="">Buat Organisasi</a>
            </div>
            <div class="col s6" style="float:right">
                <input type="search" placeholder="Cari Organisasi">
                <button>Cari</button>
            </div>
        </div>
        
        @foreach ($data as $org)
        
        <div class="row">
            <div class="col s6">

                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s3">
                                <img src="{{ $org->gambar_organisasi}}" class="circle responsive-img" style="width:100px;height:100px;">
                            </div>
                            <div class="col s9">
                                <strong>{{ $org->nama_organisasi }}</strong><br>
                                <span>{{ $org->alamat_organisasi }}</span><br>
                                <span>Berdiri Sejak, {{ $dateHelper->convertDateIndo($org->created_date,['bulan','tahun']) }}</span><br>
                                <span>{{ $org->nama_kabupaten }}, {{ $org->nama_provinsi }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @endforeach

    </div>

@endsection