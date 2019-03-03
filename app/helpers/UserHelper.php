<?php

namespace App\helpers;

use Symfony\Component\Console\Helper\Helper;


class UserHelper extends Helper {

    public function getName() {
        return 'UserHelper';
    }

    public static function generateNamaLengkap($username) {
        if(!$username) {
            return null;
        }

        $username = str_replace("_"," ",$username);
        $username = str_replace("-"," ",$username);
        $username = str_replace("."," ",$username);

        $exp = explode(" ",$username);
        foreach ($exp as $key => $val) {
            $exp[$key] = ucwords($val);
        }

        $namaLengkap = implode(" ",$exp);

        return $namaLengkap;
    }
}