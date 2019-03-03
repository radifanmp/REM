<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\helpers\UserHelper;
use Illuminate\Support\Facades\Session;

class Anggota extends Model {
    protected $table = "tb_anggota";
    protected $timestamp = false;
    public $timestamps = false;
    protected $connection = 'db_rem';
    
    public function user() {
        return $this->hasOne('App\models\User','id','id_user');
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
}