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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index1', function () {
//      return view('layout.master');
// });

Route::get('/index',[homeController::class,'index'])->name('index');
Route::get('/about',[homeController::class,'about'])->name('about');
Route::get('/acount',[homeController::class,'acount'])->name('acount');
Route::get('/companies',[homeController::class,'companies'])->name('companies');
Route::get('/contact',[homeController::class,'contact'])->name('contact');
Route::get('/dashboard',[homeController::class,'dashboard'])->name('dashboard');
Route::get('/jobdetails',[homeController::class,'jobdetails'])->name('jobdetails');
Route::get('/jobs',[homeController::class,'jobs'])->name('jobs');
Route::get('/loginpage',[homeController::class,'loginpage'])->name('loginpage');
Route::get('/profile',[homeController::class,'profile'])->name('profile');
Route::get('/service',[homeController::class,'service'])->name('service');
Route::get('/signup',[homeController::class,'signup'])->name('signup');
