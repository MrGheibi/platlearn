<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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


Route::middleware('home')
    ->get('/',[HomeController::class,'index'])->name('home');


Route::middleware('PAuth:logout')
    ->get('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('guest:web')->group(function (){
//    Route::get('/signin',[AuthController::class,'showSignIn'])->name('signin');
//    Route::get('/signup',[AuthController::class,'showSignUp'])->name('signup');
//    Route::get('/ressetpassword',[AuthController::class,'resetPassword'])->name('resetpassword');
});
Route::view('/articles','articles');
Route::view('/courses','courses');
Route::view('/404','404');
Route::view('/course','course');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
