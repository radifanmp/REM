<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Frontend\BaseController;
use App\models\User as UserModel;
use App\models\Anggota;
use App\models\Agama;
use Illuminate\Http\Request;

class ProfilController extends BaseController {

    public function editProfil() {
        if(!Session::has('username')) {
            return redirect('/');
        }
        $username = Session::get('username');
        $id_user = UserModel::getIdByUsername($username);
        $data = Anggota::where('id_user',$id_user)->first();
        $listAgama = Agama::all();
        if(!$data) {
            Anggota::simpanAnggota($id_user,$username);
            $data = Anggota::where('id_user',$id_user)->first();
        }
        return view('profil.edit',[
            'data' => $data,
            'listAgama' => $listAgama,
            ]);
    }

    public function simpanEdit(Request $request) {
        $id = Session::get('id_user');
        $data = Anggota::where('id_user',$id)->first();
        
        if(!$data) {
            return redirect('/');
        }
        $edit = $data->simpanEdit($request);
        if(!$edit) {
            self::setAlert("Mohon Maaf","Data Tidak Berhasil Tersimpan","error");
            return redirect('/profil/edit');
        }
        
        self::setAlert("Berhasil","Data Berhasil Tersimpan","success");
        return redirect('/profil/edit');

    }
}