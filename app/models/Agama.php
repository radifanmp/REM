<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model {
    protected $table = "tb_agama";
    public $timestamps = false;
    protected $connection = 'db_rem';

    
}