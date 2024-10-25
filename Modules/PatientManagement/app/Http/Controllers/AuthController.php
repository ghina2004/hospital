<?php

namespace Modules\PatientManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\PatientManagement\Http\Requests\LogInPatientRequest;
use Modules\PatientManagement\Http\Requests\PatientRequest;
use Modules\PatientManagement\Models\Patient;

class AuthController extends Controller
{

    public function register(PatientRequest $request): JsonResponse
    {
        $userData = $request->validated();

        $userData['password'] = Hash::make($userData['password']);

        $user = Patient::create($userData);

        $token = $user->createToken("API TOKEN")->plainTextToken;
        $data = [];
        $data['Patient'] = $user;
        $data['token'] = $token;
        return response()->json([
            'status' => 1,
            'data' => $data,
            'message' => ' Patient Registered  successfully'
        ], 200);
    }

    public function login(LogInPatientRequest $request): JsonResponse
    {
        $userData = $request->validated();

        if (!Auth::guard('patient')->attempt([
            'user_name' => $userData['user_name'],
            'password' => $userData['password']
        ])) {
            return response()->json([
                'data' => [],
                'status' => 0,
                'message' => 'Patient user_name & password doses not match with our record'
            ], 405);
        }
        $user = Patient::query()->where('user_name', '=', $userData['user_name'])->first();
        $token = $user->createToken("API TOKEN")->plainTextToken;
        $data = [];
        $data['Patient'] = $user;
        $data['token'] = $token;
        return response()->json([
            'status' => 1,
            'data' => $data,
            'message' => 'Patient logged in successfully'
        ], 200);
    }

    public function logout(): JsonResponse
    {
        Auth::guard('patient')->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => 1,
            'data' => [],
            'message' => __('logged out successfully')
        ], 200);
    }



}
