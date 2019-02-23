<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model {
    protected $table = "tb_anggota";
    protected $timestamp = false;
    public $timestamps = false;
    protected $connection = 'db_rem';
    
    public function user() {
        return $this->hasOne('App\models\User','id','id_user');
    }

    public static function simpanAnggota($id_user) {
        $model = new Anggota();
        $model->id_user = $id_user;
        $model->save();
    }
}