<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseController;

class HomeController extends BaseController {

    public function Index() {
        return view('home.index');
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