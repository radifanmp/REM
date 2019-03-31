<?php 
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseController;
use Illuminate\Support\Facades\Session;
use App\helpers\UserHelper;
use App\helpers\DateHelper;
use App\models\Setting;
use App\models\Agama;
use App\helpers\WilayahHelper;

class OrganisasiController extends BaseController {
    
    public function organSaya() {
        $id_user = Session::get('id_user');

        if(!$id_user) {
            return self::backHome();
        }

        $data = UserHelper::getOrganisasiUser($id_user);

        return view('organisasi.event_saya',[
            'data' => $data,
            'dateHelper' => new DateHelper(),
            'notfound' => Setting::getValueByKey('gambar_404','/img/404.png'),
        ]);
    }

    public function tambahOrgan() {

        $dataAgama = Agama::all();
        $dataProvinsi = WilayahHelper::getListProvinsi();
        $listKabupaten = [];
        
        return view('organisasi.tambah_event',[
            'listAgama' => $dataAgama,
            'listProvinsi' => $dataProvinsi,
            // 'listKabupaten' => $dataKabupaten,
        ]);
    }

    
}
?>