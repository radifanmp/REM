<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Setting extends Model {
    protected $table = "tb_setting";
    protected $timestamp = false;
    protected $connection = 'db_rem';
    
    public static function getValueByKey($key,$default = null) {
        $data = self::where('key',$key)->first();
        if(!$data) {
            return $default;
        }
        return $data->value;
    }
}