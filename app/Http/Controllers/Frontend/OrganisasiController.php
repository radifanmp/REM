<?php 
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseController;
use Illuminate\Support\Facades\Session;
use App\helpers\UserHelper;
use App\helpers\DateHelper;
use App\models\Setting;

class OrganisasiController extends BaseController {
    
    public function eventSaya() {
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
}
?>