<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* test route
Route::get('/news',function()
{
    return view('news');
});*/

Route::get('/news', [App\Http\Controllers\NewsController::class,'LNews']);

//post news route

Route::post('/news',[App\Http\Controllers\NewsController::class,'addNews']);

//om news te delete

Route::get('/DeleteN/{id}', [App\Http\Controllers\NewsController::class,'DeleteN']);

//om editted news te zien

Route::get('/editNews/{id}', [App\Http\Controllers\NewsController::class, 'seeEdittedNews']);

// om u edit te kunnen editten
Route::post('/editNews', [App\Http\Controllers\NewsController::class, 'editionNews']);

// about us

Route::get('/about', function () {
    return view('about');
});

