<?php

namespace Modules\RoomManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\PatientManagement\Models\Patient;
use Modules\RoomManagement\Http\Requests\LogInAdminRequest;
use Modules\RoomManagement\Models\admin;

class AuthAdminController extends Controller
{
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
                'message' => 'admin user_name & password doses not match with our record'
            ], 405);
        }

        $user = admin::query()->where('user_name', '=', $userData['user_name'])->first();
        $token = $user->createToken("API TOKEN")->plainTextToken;
        $data = [];
        $data['admin'] = $user;
        $data['token'] = $token;
        return response()->json([
            'status' => 1,
            'data' => $data,
            'message' => 'admin logged in successfully'
        ], 200);
    }
}
