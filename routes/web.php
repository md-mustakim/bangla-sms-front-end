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

Route::get('/', function () { return view('index');})->name('welcome');
Route::get('/pricing', function () { return view('front.pricing');})->name('pricing');
Route::get('/service', function () { return view('front.service');})->name('service');
Route::get('/about-us', function () { return view('front.about-us');})->name('about-us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
