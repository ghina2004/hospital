<?php

use Illuminate\Support\Facades\Route;
use Modules\RoomManagement\Http\Controllers\AdminController;
use Modules\RoomManagement\Http\Controllers\DepartementController;
use Modules\RoomManagement\Http\Controllers\RoomManagementController;



Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('roommanagement', RoomManagementController::class)->names('roommanagement');
});
Route::apiResource('/roommanagement',  DepartementController::class);

Route::post('/register', [AdminController::class, 'register']);
Route::post('/login', [AdminController::class, 'login']);





