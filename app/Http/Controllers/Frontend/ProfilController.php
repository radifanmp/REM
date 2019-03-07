<?php

namespace App\Http\Controllers\Frontend;

use App\models\Agama;
use App\models\Anggota;
use Illuminate\Http\Request;
use App\models\User as UserModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Frontend\BaseController;

class ProfilController extends BaseController {

    public function editProfil() {
        if(!Session::has('username')) {
            return redirect('/');
        }
        $username = Session::get('username');
        $id_user = UserModel::getIdByUsername($username);
        $data = Anggota::where('id_user',$id_user)->first();
        $listAgama = Agama::all();
        $newAkun = false;
        if(!$data) {
            Anggota::simpanAnggota($id_user,$username);
            $data = Anggota::where('id_user',$id_user)->first();
            $newAkun = true;
        }
        return view('profil.edit',[
            'data' => $data,
            'listAgama' => $listAgama,
            'newAkun' => $newAkun,
            ]);
    }

    public function simpanEdit(Request $request) {
        $id = Session::get('id_user');
        $data = Anggota::where('id_user',$id)->first();
        $saveFileDb = true;
        
        // Upload Foto Profil
        if($request->foto_profil) {
            $upload = $request->file('foto_profil');
            $path = $upload->store('public/uploads/foto_profil');
            $saveFileDb = Anggota::saveFotoProfil($path, $id);
        }

        if(!$data) {
            return redirect('/');
        }

        $edit = $data->simpanEdit($request);
        if(!$edit || !$saveFileDb) {
            self::setAlert("Mohon Maaf","Data Tidak Berhasil Tersimpan","error");
            return redirect('/profil/edit');
        }
        
        self::setAlert("Berhasil","Data Berhasil Tersimpan","success");
        return redirect('/profil/edit');

    }

    public function index(){
        $id_user = Session::get('id_user');
        $data = Anggota::where('id_user', $id_user)->first();
        
        if(!$data) {
            return redirect('/');
        }


        return view('profil.index',[
            'data' => $data,
        ]);
    }
}