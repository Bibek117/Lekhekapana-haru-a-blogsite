<?php

use App\Http\Controllers\Auth\OpenauthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminWriter;

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
    return view('front.homepage');
});


//Route::middleware(['auth','verified','adminWriter'])->group(function (){
Route::middleware(['auth','verified'])->group(function (){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/secret-test',function(){
        return view('welcome');
    })->middleware('password.confirm');
});




 
//socialite facebook login
Route::prefix('auth/facebook')->name('facebook.')->group(function(){
    Route::get('/redirect',[OpenauthController::class,'redirectFacebook'])->name('redirect');
    Route::get('/callback',[OpenauthController::class,'loginFacebook'])->name('login');
});

//socialite gmail login
Route::prefix('auth/google')->name('google.')->group(function(){
    Route::get('/redirect',[OpenauthController::class,'redirectGoogle'])->name('redirect');
    Route::get('/callback',[OpenauthController::class,'loginGoogle'])->name('login');
});

require __DIR__ . '/auth.php';
