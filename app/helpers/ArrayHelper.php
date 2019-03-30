<?php 
namespace App\helpers;

use Symfony\Component\Console\Helper\Helper;


class ArrayHelper extends Helper {

    public function getName() {
        return 'ArrayHelper';
    }

    public static function getColumn($array, $key) {
        $arr = [];
        foreach($array as $val) {
            $arr[] = $val->$key;
        }
        return $arr;
    }
}

?>