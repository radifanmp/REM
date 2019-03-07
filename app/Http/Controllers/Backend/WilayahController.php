<?php

namespace App\Http\Controllers\Backend;

use App\models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\BaseController;

class WilayahController extends BaseController {

    public function tambah() {
        $listProvinsi = Wilayah::where('type','Provinsi')->orderBy('nama_wilayah')->get();
        return view('backend.wilayah.tambah',[
            'listProvinsi' => $listProvinsi,
        ]);
    }

    public function simpanTambah(Request $request) {
        $model = new Wilayah();
        $model->nama_wilayah = $request->nama_wilayah;
        $model->parent_id = $request->provinsi_id;
        $model->type = $request->type;
        $model->save();
        return redirect('/backend/wilayah/tambah');
    }
}