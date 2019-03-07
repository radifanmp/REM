<?php

namespace App\helpers;

use Symfony\Component\Console\Helper\Helper;


class Helpers extends Helper {

    public function getName() {
        return 'Helpers';
    }

    public static function hapusPublicPath($path) {
        $path = explode("/",$path);
        unset($path[0]);
        $path = implode("/",$path);
        return $path;
    }
}