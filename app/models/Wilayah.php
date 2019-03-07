<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model {
    protected $table = "tb_wilayah";
    public $timestamps = false;
    protected $connection = 'db_rem';

    
}