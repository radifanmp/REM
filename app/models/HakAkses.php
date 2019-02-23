<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class HakAkses extends Model {
    protected $table = "tb_hak_akses";
    protected $timestamp = false;
    protected $connection = 'db_rem';
    
    public static function getIdByNama($nama) {
        $data = self::where(['nama' => $nama])->first();
        // Jika Data Tidak Ditemukan
        if(!$data) {
            return null;
        }
        return $data->id;
    }
}