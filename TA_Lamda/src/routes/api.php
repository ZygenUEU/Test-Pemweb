<?php

use App\Http\Controllers\Admin\MobileGameController;
use App\Http\Controllers\Admin\PCGameController;
use App\Http\Controllers\AuthController;

// Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
//     // Book
//     Route::apiResource('books', 'BookApiController');

//     // PCGame
//     Route::apiResource('pcgames', 'PCGameApiController');

//     // MobileGame
//     Route::apiResource('mobilegames', 'MobileGameApiController');
// });

Route::get('/testapi', function(){
    return 'mencoba api';
});


//Public Route
Route::post('/registerapi', [AuthController::class, 'register']);
Route::post('/loginapi', [AuthController::class, 'login']);

//Protected Route
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/pcgames', [PCGameController::class, 'indexAPI']);
    Route::get('/pcgames/{id}', [PCGameController::class, 'showAPI']);
    Route::get('/pcgames/search/{gamename}', [PCGameController::class, 'searchAPI']);
    Route::post('/pcgames', [PCGameController::class, 'storeAPI']);
    Route::put('/pcgames/{id}', [PCGameController::class, 'updateAPI']);
    Route::delete('/pcgames/{id}', [PCGameController::class, 'destroyAPI']);

    Route::get('/mobilegames', [MobileGameController::class, 'indexAPI']);
    Route::get('/mobilegames/{id}', [MobileGameController::class, 'showAPI']);
    Route::get('/mobilegames/search/{gamename}', [MobileGameController::class, 'searchAPI']);
    Route::post('/mobilegames', [MobileGameController::class, 'storeAPI']);
    Route::put('/mobilegames/{id}', [MobileGameController::class, 'updateAPI']);
    Route::delete('/mobilegames/{id}', [MobileGameController::class, 'destroyAPI']);

    Route::post('/logoutapi', [AuthController::class, 'logout']);
});