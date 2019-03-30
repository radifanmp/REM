@extends('layouts.main')
@section('content')
<div>
    <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">Profil</h5>
    <hr class="style-one"  style="margin-bottom:79px;">
      @csrf
    <center>
    <img src="{{ $data->foto_profil ? asset('storage/' . $data->foto_profil) : '/img/dp.png' }}" class="circle responsive-img" style="width:200px; height:200px;"><br>
    <label style="font-size:40px; font-weight:bold;">{{ $data->nama }}</label><br>
    <label style="font-size:25px;">{{ '@'.$data->user->username }}</label>
    </center>
    <br>
    <label style="font-size:15px; font-weight:bold;">Informasi Umum</label>
    <div style="float:right; margin:15px;"><a href="/profil/edit" class="waves-effect waves-light btn grey darken-3" style="border-radius:15px;"><i class="fas fa-user-edit" style="font-size:20px;"></i>&nbsp;&nbsp; Edit Profil</a></div>
    <table class="striped">
            <tbody>
              <tr>
                <td style="font-weight:bold;"><i class="fas fa-user-circle" style="font-size:20px;"></i>&nbsp;&nbsp;Nama</td>
                <td style="width:50%;">{{ $data->nama }}</td>
              </tr>
              <tr>
                <td style="font-weight:bold;"><i class="fas fa-envelope " style="font-size:20px;"></i>&nbsp;&nbsp;Email</td>
                <td>{{ $data->email }}</td>
              </tr>
              <tr>
                <td style="font-weight:bold;"><i class="fas fa-key " style="font-size:20px;"></i>&nbsp;&nbsp;Password</td>
                <td> <a href="/profil/gantipass" style="color:#2962ff ">Change Password</a></td>
              </tr>
              <tr>
                    <td style="font-weight:bold;"><i class="fas fa-arrow-circle-right " style="font-size:20px;"></i>&nbsp;&nbsp;Agama</td>
                    <td>{{ $data->agama ? ucwords($data->agama->nama_agama) : '' }}</td>
             </tr>
             <tr>
                    <td style="font-weight:bold;"><i class="fas fa-arrow-circle-down " style="font-size:20px;"></i>&nbsp;&nbsp;Jenis Kelamin</td>
                    <td>{{ $data->jenis_kelamin }}</td>
            </tr>
            <tr>
                    <td style="font-weight:bold;"><i class="fas fa-phone " style="font-size:20px;"></i>&nbsp;&nbsp;No. Telp</td>
                    <td>{{ $data->no_telp }}</td>
            </tr>
            <tr>
                    <td style="font-weight:bold;"><i class="fas fa-map-marked-alt " style="font-size:20px;"></i>&nbsp;&nbsp;Alamat</td>
                    <td>{{ $data->alamat }}</td>
            </tr>
            </tbody>
          </table>

          <div style="margin-bottom:50px;">

          </div>
                
</div>

@endsection
