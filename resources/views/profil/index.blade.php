@extends('layouts.main')
@section('content')
<div>
    <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">Profil</h5>
    <hr class="style-one"  style="margin-bottom:79px;">
      @csrf
    <center>
    <img src="/img/dp.png" class="circle responsive-img" style="width:200px; height:200px;"><br>
    <label style="font-size:40px; font-weight:bold;">James Lowes</label><br>
    <label style="font-size:25px;">James_lowes</label>
    </center>
    <br>
    <label style="font-size:15px; font-weight:bold;">Informasi Umum</label>
    <div style="float:right; margin:15px;"><a href="/profil/edit" class="waves-effect waves-light btn grey darken-3" style="border-radius:15px;"><i class="fas fa-user-edit" style="font-size:20px;"></i>&nbsp;&nbsp; Edit Profil</a></div>
    <table class="striped">
            <tbody>
              <tr>
                <td style="font-weight:bold;"><i class="fas fa-user-circle" style="font-size:20px;"></i>&nbsp;&nbsp;Nama</td>
                <td style="width:50%;">James Lowes</td>
              </tr>
              <tr>
                <td style="font-weight:bold;"><i class="fas fa-envelope " style="font-size:20px;"></i>&nbsp;&nbsp;Email</td>
                <td>James@gmail.com</td>
              </tr>
              <tr>
                <td style="font-weight:bold;"><i class="fas fa-key " style="font-size:20px;"></i>&nbsp;&nbsp;Password</td>
                <td a href="#" style="color:#2962ff ">Change Password</a></td>
              </tr>
              <tr>
                    <td style="font-weight:bold;"><i class="fas fa-arrow-circle-right " style="font-size:20px;"></i>&nbsp;&nbsp;Agama</td>
                    <td>Islam</td>
             </tr>
             <tr>
                    <td style="font-weight:bold;"><i class="fas fa-arrow-circle-down " style="font-size:20px;"></i>&nbsp;&nbsp;Jenis Kelamin</td>
                    <td>Laki-laki</td>
            </tr>
            <tr>
                    <td style="font-weight:bold;"><i class="fas fa-phone " style="font-size:20px;"></i>&nbsp;&nbsp;No. Telp</td>
                    <td>083896833133</td>
            </tr>
            <tr>
                    <td style="font-weight:bold;"><i class="fas fa-map-marked-alt " style="font-size:20px;"></i>&nbsp;&nbsp;Alamat</td>
                    <td>Jl.Perum Griya Alam Sentosan Blok R1 No9</td>
            </tr>
            </tbody>
          </table>
                
</div>
@endsection
