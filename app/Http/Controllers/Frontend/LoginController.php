<?php

namespace App\Http\Controllers\Frontend;

use App\models\User as UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\BaseController;

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
        self::setAlert("Selamat","Anda Berhasil Login!","success");

        // Get Halaman Redirect Setelah Login
        $backUrl = self::getSession('HomeUrl');
        return redirect($backUrl);
    }
}