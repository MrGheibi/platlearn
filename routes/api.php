<?php

use App\Http\Controllers\API\Panel\PanelAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/adc', function () {
    dd(
        'jdklfjasld'
    );
});
//    ################        auth        ################
    Route::group([
        'prefix' => 'auth'
    ], function () {
        Route::post('logout', [PanelAuthController::class, 'logout']);
        Route::post('login', [PanelAuthController::class, 'login']);
        Route::post('islogin', [PanelAuthController::class, 'islogin']);
        Route::post('refresh', [PanelAuthController::class, 'refresh']);
    });



