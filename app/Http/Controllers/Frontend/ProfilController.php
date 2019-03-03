<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Frontend\BaseController;
use App\models\User as UserModel;
use App\models\Anggota;

class ProfilController extends BaseController {

    public function editProfil() {
        if(!Session::has('username')) {
            return redirect('/');
        }
        $username = Session::get('username');
        $id_user = UserModel::getIdByUsername($username);
        $data = Anggota::where('id_user',$id_user)->first();
        if(!$data) {
            Anggota::simpanAnggota($id_user,$username);
            $data = Anggota::where('id_user',$id_user)->first();
        }
        return view('profil.edit',['data' => $data]);
    }
}