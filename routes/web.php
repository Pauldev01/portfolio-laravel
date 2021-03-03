<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\WelcomeadmnController;


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

Route::get('/',[WelcomeController::class,'index']) -> name('welcome');

Route::get('/aboutme',[AboutmeController::class,'index']) -> name('aboutme');

// Route::get('/creation',[CreationController::class,'index']) -> name('creation');

Route::get('/creation', function () {
    return view('creation');
})-> name('creation');

Route::get('/competence', function () {
    return view('competence');
})-> name('competence');

Route::get('/contact', function () {
    return view('contact');
})-> name('contact');


// routes admn
Route::get('/welcomeadmn',[WelcomeadmnController::class,'index']) -> name('welcomeadmn');

//destroy
Route::post('/delete-nav/{id}', [WelcomeadmnController::class,"destroyNav"]);
Route::post('/delete-welcome/{id}', [WelcomeadmnController::class,"destroyWelcome"]);

//edit + update
Route::get('/edit-nav/{id}',[WelcomeadmnController::class,'editNav']);
Route::post('/update-nav/{id}', [WelcomeadmnController::class,"updateNav"]);