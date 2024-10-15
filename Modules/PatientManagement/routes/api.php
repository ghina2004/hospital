<?php

use Illuminate\Support\Facades\Route;
use Modules\DoctorManagement\Http\Controllers\AuthDoctorController;
use Modules\DoctorManagement\Http\Controllers\DoctorManagementController;
use Modules\PatientManagement\Http\Controllers\AuthController;
use Modules\PatientManagement\Http\Controllers\PatientManagementController;
use Modules\RoomManagement\Http\Controllers\AuthAdminController;


Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('patientmanagement', PatientManagementController::class)->names('patientmanagement');
});
Route::post('/register', [AuthController::class, 'register']);
//Route::middleware(['auth.patient'])->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
///Route::middleware(['auth.patient'])->group(function () {
Route::post('/adminlogin', [AuthAdminController::class, 'login']);
Route::post('/doctorlogin', [AuthDoctorController::class, 'login']);
Route::middleware(['auth.admin'])->group(function () {
    Route::post('/doctorcreate', [DoctorManagementController::class, 'createDoctor']);
});
