<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class HakAkses extends Model {
    protected $table = "tb_hak_akses";
    protected $timestamp = false;
    protected $connection = 'db_rem';
    
}