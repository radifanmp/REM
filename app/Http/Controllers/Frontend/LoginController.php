<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\models\User as UserModel;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Frontend\BaseController;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController {
    
    public function login(Request $request) {
        if(!$request->isMethod('POST')) {
            self::setAlert("Mohon Maaf",'Terjadi Kesalahan !','error');
            return redirect('/');
        }

        // Cek Login User
        $sukses = UserModel::cekLogin($request->username,$request->password);
        
        // Jika Tidak Berhasil Login
        if(!$sukses) {
            self::setAlert("Mohon Maaf","Username / Password Salah","error");
            return redirect('/');
        }

        // Set Session2 Untuk Identitas Login
        UserModel::setSessionUser($request->username);
        $user = UserModel::where('username',$request->username)->first();
        Auth::login($user);
        self::setAlert("Selamat","Anda Berhasil Login!","success");

        // Get Halaman Redirect Setelah Login
        $backUrl = self::getSession('HomeUrl');
        return redirect($backUrl);
    }

    public function logout() {
        if(Session::has('username')) {
            Session::flush();
        }
        return redirect('/');
    }

    public function daftarAnggota(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $konf_pass = $request->konfirmasi_password;
        
        // Cek Jika Username sudah ada
        if(!UserModel::cekAvailableUsername($username)) {
            self::setAlert("Mohon Maaf","Username telah terpakai.","error");
            return redirect('/');
        }

        // Jika Password Berbeda dengan konfirmasi Password
        if($password != $konf_pass) {
            self::setAlert("Mohon Maaf","Password tidak sesuai dengan konfirmasi password.","error");
            return redirect('/');
        }

        $berhasil = UserModel::simpanUser($username,$password,'user');
        // Jika Tidak Berhasil Menyimpan Data
        if(!$berhasil) {
            self::setAlert("Mohon Maaf","Terjadi Kesalahan Saat Menyimpan Data.","error");
            return redirect('/');
        }
        UserModel::setSessionUser($username);
        return redirect('/profil/edit');
    }
}