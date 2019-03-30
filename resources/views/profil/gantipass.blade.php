@extends('layouts.main')
@section('content')
<div>
    <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">Ganti Password</h5> 
    <hr class="style-one"  style="margin-bottom:79px;">
    <form action="#" method="post" enctype="multipart/form-data">
      @csrf
<div class="col s3">
</div>

    <div class="col s6">
        <label for="Password Lama">Password Lama</label>
        <input type="password" placeholder="Password Lama"> <br><br><br>
        
        <label for="Password Lama">Password Baru</label>
        <input type="password" placeholder="Password Baru"> <br><br><br>
        
        <label for="Password Lama">Konfirmasi Password</label>
        <input type="password" placeholder="Konfirmasi Password">  <br><br><br>
    </div>

    
    <div class="col s12 center-align">
            <button type="submit" class="waves-effect waves-light btn blue-grey darken-4" style="width: 30%; border-radius:30px; margin-bottom:50px;">Simpan</button>
    </div>
    

    </form>
    
</div>
@endsection
