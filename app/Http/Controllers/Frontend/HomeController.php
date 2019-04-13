<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseController;
use App\models\Agama;

class HomeController extends BaseController {

    public function Index() {
        $dataAgama = Agama::all();
        
        return view('home.index',[
            'dataAgama' => $dataAgama
        ]);
    }

    public function About()
    {
        return view('home.about');
    }

    public function Contact()
    {
        return view('home.contact');
    }
}