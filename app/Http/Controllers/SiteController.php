<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index () {
        return view ('home');
    }

    public function photos () {
        return view ('photos');
    }

    public function documents () {
        return view ('documents');
    }

    public function arts () {
        return view ('arts');
    }
}
