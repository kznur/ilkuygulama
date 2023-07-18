<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Hakkimizda(){
        return view('frontend.pages.hakkimizda');
    }

    public function Urunler(){
        return view('frontend.pages.urunler');
    }
    public function UrunDetay(){
        return view('frontend.pages.urundetay');
    }
    public function Kategoriler(){
        return view('frontend.pages.kategoriler');
    }
    public function Koleksiyonlar(){
        return view('frontend.pages.koleksiyonlar');
    }
    public function Sepet(){
        return view('frontend.pages.sepet');
    }
    public function Iletisim(){

        return view('frontend.pages.iletisim');
    }

    public function UrunList(){

        return view('frontend.pages.urunlist');
    }
}
