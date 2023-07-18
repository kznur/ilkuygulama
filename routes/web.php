<?php

use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\PageHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/anasayfa',[PageHomeController::class,'Anasayfa'])->name('anasayfa');
Route::get('/hakkimizda',[PageController::class,'Hakkimizda'])->name('hakkimizda');
Route::get('/koleksiyonlar',[PageController::class,'Koleksiyonlar'])->name('koleksiyon');
Route::get('/urunler',[PageController::class,'Urunler'])->name('urunler');
Route::get('/urundetay',[PageController::class,'UrunDetay'])->name('urundetay');
Route::get('/kategoriler',[PageController::class,'Kategoriler'])->name('kategoriler');
Route::get('/iletisim',[PageController::class,'Iletisim'])->name('iletisim');
Route::get('/sepet',[PageController::class,'Sepet'])->name('sepet');
Route::get('/urunlist',[PageController::class,'UrunList'])->name('urunlist');
Route::get('/dashboard',[AdminController::class,'GetDashboard'])->name('dashboard');
Route::get('/categories',[CategoryController::class,'GetCategories'])->name("get-categories");
Route::post('/categories',[CategoryController::class,"CreateCategory"])->name('creat_ecategory');


