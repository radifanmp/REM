<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\helpers\UserHelper;
use Illuminate\Support\Facades\Session;
use App\helpers\Helpers;
use Illuminate\Support\Facades\Storage;

class Anggota extends Model {
    protected $table = "tb_anggota";
    protected $timestamp = false;
    public $timestamps = false;
    protected $connection = 'db_rem';
    
    public function user() {
        return $this->hasOne('App\models\User','id','id_user');
    }

    public function agama() {
        return $this->hasOne('App\models\Agama','id','id_agama');
    }

    public static function simpanAnggota($id_user,$username) {
        $model = new Anggota();
        $model->id_user = $id_user;
        $model->nama = UserHelper::generateNamaLengkap($username);
        $model->foto_profil = Setting::getValueByKey('default_profil','/img/default_profie.jpeg');
        $model->save();
    }

    public function simpanEdit($req) {
        $id_user = Session::get('id_user');
        // save ke table anggota
        $this->nama = $req->nama;
        $this->email = $req->email;
        $this->id_agama = $req->id_agama;
        $this->jenis_kelamin = $req->jenis_kelamin;
        $this->no_telp = $req->no_telp;
        $this->alamat = $req->alamat;
        
        $dataUser = new User();
        $dataUser = $dataUser->where('id',$id_user)->first();
        $dataUser->username = $req->username;
        Session::put('username',$req->username);

        if(!$this->save() || !$dataUser->save()) {
            return false;
        }

        return true;
    }

    public static function saveFotoProfil($path,$id_user) {
        $data = self::where('id_user',$id_user)->first();

        if(!$data) {
            return false;
        }

        $path = Helpers::hapusPublicPath($path);
        
        if($data->foto_profil) {
            Storage::delete('public/'.$data->foto_profil);
        }
        
        $data->foto_profil = $path;



        if(!$data->save()) {
            return false;
        }

        Session::put('foto_profil', asset('storage/' . $data->foto_profil));
        return true;
    }
}