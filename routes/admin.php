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
Route::get('/', \App\Http\Livewire\Admin\Dashboard\Index::class)->name('admin.index');
//Sliders
Route::get('/sliders', \App\Http\Livewire\Admin\Sliders\Index::class)->name('slider.index');
Route::get('/sliders/{slider}/edit', \App\Http\Livewire\Admin\Sliders\Edit::class)->name('slider.edit');
//Services
Route::get('/services', \App\Http\Livewire\Admin\Services\Index::class)->name('service.index');
Route::get('/services/{service}/edit', \App\Http\Livewire\Admin\Services\Edit::class)->name('service.edit');
//categories
Route::get('/categories', \App\Http\Livewire\Admin\Categories\Index::class)->name('category.index');
Route::get('/categories/{category}/edit', \App\Http\Livewire\Admin\Categories\Edit::class)->name('category.edit');
//portfolios
Route::get('/portfolios', \App\Http\Livewire\Admin\Portfolios\Index::class)->name('portfolio.index');
Route::get('/portfolios/{portfolio}/edit', \App\Http\Livewire\Admin\Portfolios\Edit::class)->name('portfolio.edit');
