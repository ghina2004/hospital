<?php

namespace Modules\DoctorManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\DoctorManagement\Http\Requests\AddDoctorRequest;
use Modules\DoctorManagement\Models\Doctor;
use Modules\PatientManagement\Models\Patient;

class DoctorManagementController extends Controller
{

    public function createDoctor( AddDoctorRequest $request)
    {
//      if(Auth::guard('admin')){
        $userData = $request->validated();

        $userData['password'] = Hash::make($userData['password']);

        $user = Doctor::create($userData);

        return response()->json([
            'status' => '1',
            'message' => 'Created successfully!',
            'data' => $user
        ], 200);
//   } else {
//
//            return response()->json([
//               'status' => '0',
//                'message' => 'You are not a Vendor',
//                 'data' => []
//], 500);
//}


    }

}
