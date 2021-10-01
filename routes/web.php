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
})->name('home');

Route::get('/aboutus', function () {
    return view('about');
})->name('aboutus');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/send-message', [App\Http\Controllers\EmailController::class, 'send'])->name('send');
