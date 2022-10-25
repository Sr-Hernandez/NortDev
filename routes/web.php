<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;

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
    return view('index');
})->name('/');
Route::get('home', function () {
    return view('index');
});

Route::get('/contacto', [IndexController::Class,'contacto'])->name('contacto');
Route::get('/contacto_mensjae', [ContactController::Class,'contacto_mensaje'])->name('contacto_mensaje');
Route::get('/portafolio', [IndexController::Class,'portafolio'])->name('portafolio');
Route::get('/portafolio-barber', [IndexController::Class,'portafoliobarber'])->name('portafoliobarber');
Route::get('/cv', [IndexController::Class,'cv'])->name('cv');
