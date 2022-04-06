<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\adsController;
use App\Http\Controllers\servicesController;

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

// user
Route::get('/adminDashboard',[userController::class,'adminDashboard'])->name('adminDashboard');
Route::get('/list_users',[userController::class,'list_users'])->name('list_users');

// role
Route::get('/add_role',[roleController::class,'add_role'])->name('add_role');
Route::get('/list_roles',[roleController::class,'list_roles'])->name('list_roles');

//jobs
Route::get('/add_job',[jobController::class,'add_job'])->name('add_job');
Route::get('/list_jobs',[jobController::class,'list_jobs'])->name('list_jobs');

//company
Route::get('/add_company',[companyController::class,'add_company'])->name('add_company');
Route::get('/list_companys',[companyController::class,'list_companys'])->name('list_companys');

// ads
Route::get('/add_ads',[adsController::class,'add_ads'])->name('add_ads');
Route::get('/list_ads',[adsController::class,'list_ads'])->name('list_ads');

//services
Route::get('/add_services',[servicesController::class,'add_services'])->name('add_services');
Route::get('/list_services',[servicesController::class,'list_services'])->name('list_services');
