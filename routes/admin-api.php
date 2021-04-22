<?php

use App\Http\Controllers\API\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;

//    ################        auth        ################


Route::group([
    'prefix' => 'auth'
], function () {
    Route::get('/adc', function () {
        return 'jdklfjasld';
    });
    Route::post('login', [AdminAuthController::class, 'login'])->middleware('checkAdmin');
    Route::post('register', [AdminAuthController::class, 'register']);
    Route::post('logout', [AdminAuthController::class, 'logout']);
    Route::post('islogin', [AdminAuthController::class, 'islogin']);
    Route::post('refresh', [AdminAuthController::class, 'refresh']);
    Route::post('profile', [AdminAuthController::class, 'profile']);
});
//    ################        Categories        ################
/*  Route::group([
      'prefix' => 'categories'
  ], function () {
      Route::post('index', [CategoryController::class,'index']);
      Route::post('store', [CategoryController::class,'store']);
      Route::post('update/{category}', [CategoryController::class,'update']);
      Route::post('destroy/{category}', [CategoryController::class,'destroy']);
      Route::post('delete/{category}', [CategoryController::class,'delete']);
      Route::post('restore/{category}', [CategoryController::class,'restore']);
  });*/

//    ################        Products        ################
/* Route::group([
     'prefix' => 'products'
 ], function () {
     Route::post('index', [ProductController::class,'index']);
     Route::post('store', [ProductController::class,'store']);
     Route::post('update/{product}', [ProductController::class,'update']);
     Route::post('destroy/{product}', [ProductController::class,'destroy']);
 });*/
