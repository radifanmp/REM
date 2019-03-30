<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BaseController extends Controller {
    public $layout = 'layouts.main';
    
    public static function setAlert($header='',$body='',$type = '') {
        Session::flash('message', $body); 
        Session::flash('header', $header);
        Session::flash('type', $type);
    }
    
    public static function setSession($name,$val = '') {
        if(!is_array($name)) {
            Session::put($name,$val);
        }

        foreach($name as $key => $value) {
            Session::put($key,$value);
        }
    }

    public static function getSession($name) {
        if(!Session::has($name)) {
            return null;
        }
        return Session::get($name);
    }
}