<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function Anasayfa(){
        return view('frontend.pages.index');
    }
}
