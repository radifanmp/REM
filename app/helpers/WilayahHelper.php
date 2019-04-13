<?php 
namespace App\helpers;

use App\models\Wilayah;


class WilayahHelper extends Helpers {


    public static function getListProvinsi() {
        $data = Wilayah::where('type','Provinsi')->orderBy('nama_wilayah')->get();
        
        if(!$data) {
            return null;
        }

        return $data;
    }

    public static function getListKabupaten() {
        $data = Wilayah::where('type', 'Kabupaten')->orderBy('nama_wilayah')->get();

        if(!$data) {
            return null;
        }

        return $data;
    }

    public static function getChildKabupaten($id) {
        $data = Wilayah::where('type', 'Kabupaten')->orderBy('nama_wilayah')->where('parent_id',$id)->get();
        
        if(!$data) {
            return null;
        }

        return $data;
    }
}


?>