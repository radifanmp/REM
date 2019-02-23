<?php

namespace App\models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class User extends Model {
    protected $table = "tb_user";
    protected $timestamp = false;
    protected $connection = 'db_rem';
    
    public function HakAkses() {
        return $this->hasOne('App\models\HakAkses','id','id_hak_akses');
    }

    public static function cekLogin($username,$password) {
        // Ambil Data Pada DB
        $data = self::where('username',$username)->first();

        // Jika Username Tidak Ditemukan
        if(!$data) {
            return false;
        }

        $db_pass = $data->password;

        // Jika Password Salah
        if(!self::cekPassword($password,$db_pass)) {
            return false;
        }

        return true;
    }

    public static function getRedirectUrl($username) {
        return self::where('username',$username)->first()->redirect_url;
    }

    public static function buatPassword($password) {
        return Hash::make($password);
    }

    public static function cekPassword($password,$hashed) {
        return Hash::check($password, $hashed);
    }

    public static function setSessionUser($username) {
        $data = self::where('username',$username)->first();
        if(!$data) {
            return;
        }

        Session::put('username',$data->username);
        Session::put('hak_akses',$data->HakAkses->nama);
        Session::put('HomeUrl',$data->redirect_url);
        Session::put('is_login',true);
    }
}