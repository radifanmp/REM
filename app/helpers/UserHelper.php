<?php

namespace App\helpers;

use Symfony\Component\Console\Helper\Helper;
use App\models\OrganisasiDetail;
use Illuminate\Support\Arr;
use App\models\Organisasi;


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

    public static function getOrganisasiUser($id) {
        $data = OrganisasiDetail::where('id_user', $id)->get();
        
        if(!$data) {
            return [];
        }

        $dataOrg = ArrayHelper::getColumn($data, 'id_organisasi');
        
        if(!$dataOrg) {
            return [];
        }

        $org = Organisasi::where('id',$dataOrg)->get();
        return $org;
    }
}