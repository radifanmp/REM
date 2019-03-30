<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model {
    protected $table = "tb_organisasi";
    public $timestamps = false;
    protected $connection = 'db_rem';

    
}