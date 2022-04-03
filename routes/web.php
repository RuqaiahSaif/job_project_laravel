<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

Route::get('/index',[homeController::class,'index']);
Route::get('/about',[homeController::class,'about']);
Route::get('/acount',[homeController::class,'acount']);
Route::get('/companies',[homeController::class,'companies']);
Route::get('/contact',[homeController::class,'acount']);
Route::get('/dashboard',[homeController::class,'dashboard']);
Route::get('/jobdetails',[homeController::class,'jobdetails']);
Route::get('/jobs',[homeController::class,'jobs']);
Route::get('/loginpage',[homeController::class,'loginpage']);
Route::get('/profile',[homeController::class,'profile']);
Route::get('/service',[homeController::class,'service']);
Route::get('/signup',[homeController::class,'signup']);
