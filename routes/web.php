<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\Home\IndexController::class,'index'])->name('home.index');
Route::get('/blogs',[\App\Http\Controllers\Home\IndexController::class,'blog'])->name('home.blog');
Route::get('/about',[\App\Http\Controllers\Home\IndexController::class,'aboutUs'])->name('home.about');
Route::get('/contact',[\App\Http\Controllers\Home\IndexController::class,'contactUs'])->name('home.contact');
//Area
Route::get('/services/area',[\App\Http\Controllers\Home\AreaController::class,'index'])->name('area.index');
Route::get('/services/area/{service}/province',[\App\Http\Controllers\Home\AreaController::class,'province'])->name('area.province');
Route::get('/services/area/{service_id}/{province}/cities',[\App\Http\Controllers\Home\AreaController::class,'cities'])->name('area.city');
Route::get('/services/area/{service}/{city}/prices',[\App\Http\Controllers\Home\AreaController::class,'prices'])->name('area.price');
//TV
Route::get('/services/tv',[\App\Http\Controllers\Home\TvController::class,'index'])->name('tv.index');
Route::get('/services/tv/{category}/networks',[\App\Http\Controllers\Home\TvController::class,'networks'])->name('tv.network');
Route::get('/services/tv/{category}/{network}/prices',[\App\Http\Controllers\Home\TvController::class,'prices'])->name('tv.price');
//Metro
Route::get('/services/metro',[\App\Http\Controllers\Home\MetroController::class,'lines'])->name('metro.index');
Route::get('/services/metro/{line}/stations',[\App\Http\Controllers\Home\MetroController::class,'stations'])->name('metro.station');
Route::get('/services/metro/{line}/{station}/products',[\App\Http\Controllers\Home\MetroController::class,'prices'])->name('metro.prices');
Route::get('/services/metro/{station}/{price}/prices',[\App\Http\Controllers\Home\MetroController::class,'prices'])->name('metro.p');
