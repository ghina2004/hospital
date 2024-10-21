<?php

namespace Modules\DoctorManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\DoctorManagement\Http\Requests\AddDoctorRequest;
use Modules\DoctorManagement\Http\Requests\LogInDoctorRequest;
use Modules\DoctorManagement\Models\Doctor;
use Modules\RoomManagement\Http\Requests\LogInAdminRequest;
use Modules\RoomManagement\Models\admin;

class AuthDoctorController extends Controller
{
    public function login(LogInDoctorRequest $request): JsonResponse
    {
        $userData = $request->validated();

        if (!Auth::guard('doctor')->attempt([
            'user_name' => $userData['user_name'],
            'password' => $userData['password']
        ])) {
            return response()->json([
                'data' => [],
                'status' => 0,
                'message' => 'doctor user_name & password doses not match with our record'
            ], 405);
        }
        $user = Doctor::query()->where('user_name', '=', $userData['user_name'])->first();
        $token = $user->createToken("API TOKEN")->plainTextToken;
        $data = [];
        $data['doctor'] = $user;
        $data['token'] = $token;
        return response()->json([
            'status' => 1,
            'data' => $data,
            'message' => 'doctor logged in successfully'
        ], 200);
    }





}
