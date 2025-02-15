<?php

namespace Modules\RoomManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\PatientManagement\Http\Requests\PatientRequest;
use Modules\PatientManagement\Models\Patient;
use Modules\RoomManagement\Http\Requests\LogInAdminRequest;
use Modules\RoomManagement\Http\Requests\RegisterRequest;
use Modules\RoomManagement\Models\admin;

class AdminController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $userData = $request->validated();

        $userData['password'] = Hash::make($userData['password']);

        $user = admin::create($userData);

        $token = $user->createToken("API TOKEN")->plainTextToken;
        $data = [];
        $data['user'] = $user;
        $data['token'] = $token;
        return response()->json([
            'status' => 1,
            'data' => $data,
            'message' => '  Registered  successfully'
        ], 200);}

    public function login(LogInAdminRequest $request): JsonResponse
    {
        $userData = $request->validated();

        if(!Auth::guard('admin')->attempt([
            'user_name' => $userData['user_name'],
            'password' => $userData['password']
        ])) {
            return response()->json([
                'data' => [],
                'status' => 0,
                'message' => ' user_name & password doses not match with our record'
            ], 405);
        }

        $user = admin::query()->where('user_name', '=', $userData['user_name'])->first();
        $token = $user->createToken("API TOKEN")->plainTextToken;
        $data = [];
        $data['user'] = $user;
        $data['token'] = $token;
        return response()->json([
            'status' => 1,
            'data' => $data,
            'message' => ' logged in successfully'
        ], 200);
    }

}
