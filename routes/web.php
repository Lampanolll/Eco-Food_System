<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/homepage',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_foodcomp_view',[AdminController::class,'addview']);

Route::post('/upload_foodcomp',[AdminController::class,'upload']);

Route::post('/booking',[HomeController::class,'booking']);

Route::get('/requestbooking',[HomeController::class,'requestbooking']);

Route::get('/cancel_request/{id}',[HomeController::class,'cancel_request']);

Route::get('/showbooking',[AdminController::class,'showbooking']);

Route::get('/approve_request/{id}',[AdminController::class,'approve_request']);

Route::get('/canceled_request/{id}',[AdminController::class,'canceled_request']);

Route::get('/showfoodcomp',[AdminController::class,'showfoodcomp']);

Route::get('/deletefoodcomp/{id}',[AdminController::class,'deletefoodcomp']);

Route::get('/updatefoodcomp/{id}',[AdminController::class,'updatefoodcomp']);
