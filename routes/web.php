<?php

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

// Route::get('/', function () {
//     return view('auth.confirm');
// });

Route::middleware(['auth','verified','adminWriter'])->group(function (){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/',function(){
        return view('welcome');
    })->middleware('password.confirm');
});

require __DIR__ . '/auth.php';
