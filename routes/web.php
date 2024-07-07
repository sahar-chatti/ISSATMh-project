<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('frontend.studentProfil');
});
Route::get('/CommanderCarte', function () {
    return view('frontend.carteElectro');
});
Route::get('/contact',[MainController::class , 'contact'])->name('contact');
Route::get('/about',[MainController::class , 'about'])->name('about');
Route::get('/about-us',[MainController::class , 'aboutUs'])->name('about-us');
Route::get('/team',[MainController::class , 'team'])->name('team');
Route::get('/service',[MainController::class , 'service'])->name('service');
Route::get('/save_contact',[MainController::class , 'save_contact'])->name('save_contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
