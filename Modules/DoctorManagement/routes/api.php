<?php

use Illuminate\Support\Facades\Route;
use Modules\DoctorManagement\Http\Controllers\DoctorManagementController;



//Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
//    Route::apiResource('doctormanagement', DoctorManagementController::class)->names('doctormanagement');
//});
Route::middleware(['auth.admin'])->group(function () {
    Route::post('/doctorcreate', [DoctorManagementController::class, 'createDoctor']);
});
