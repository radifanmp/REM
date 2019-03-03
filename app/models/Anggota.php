<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\helpers\UserHelper;

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
        $model->save();
    }
}