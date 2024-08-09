<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\RentoutInfoController;
use App\Http\Controllers\API\RentalObjectController;
use App\Http\Controllers\API\UtilsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(RegisterController::class)->group(function(){
    Route::post('/register', 'register');
    Route::post('/login-by-phone-intent', 'loginByPhoneIntent');
    Route::post('/login-by-email-intent', 'loginByEmailIntent');
    Route::post('/login-by-phone', 'loginByPhone');
    Route::post('/login-by-email', 'loginByEmail');
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('rentout_info', RentoutInfoController::class);

    Route::get('/utils/get-ip-address', [UtilsController::class, 'getIpAddress']);
    Route::get('/utils/is-auth', [UtilsController::class, 'isAuth']);
    Route::get('/logout', [RegisterController::class, 'logout']);

    Route::get('/rental-objects', [RentalObjectController::class, 'index']);
    Route::post('/rental-objects/create', [RentalObjectController::class, 'create']);
    Route::post('/rental-objects/set-status-type', [RentalObjectController::class, 'setStatusType']);
    Route::post('/rental-objects/set-address', [RentalObjectController::class, 'setAddress']);
    Route::post('/rental-objects/set-amenities', [RentalObjectController::class, 'setAmenities']);
    Route::get('/rental-objects/get-amenities', [RentalObjectController::class, 'getAmenities']);
    Route::post('/rental-objects/set-params', [RentalObjectController::class, 'setParams']);
    Route::post('/rental-objects/set-cost-params', [RentalObjectController::class, 'setCostParams']);
    Route::post('/rental-objects/set-restrictions', [RentalObjectController::class, 'setRestrictions']);
    Route::post('/rental-objects/add-image', [RentalObjectController::class, 'addImage']);
    Route::post('/rental-objects/delete-image', [RentalObjectController::class, 'deleteImage']);
    Route::post('/rental-objects/set-image-is-main', [RentalObjectController::class, 'setImageIsMain']);
    Route::post('/rental-objects/set-title-and-descr', [RentalObjectController::class, 'setTitleAndDescr']);
    Route::get('/rental-objects/get-rental-object', [RentalObjectController::class, 'getRentalObject']);

    Route::get('/requests', [RequestsController::class, 'index']);
});