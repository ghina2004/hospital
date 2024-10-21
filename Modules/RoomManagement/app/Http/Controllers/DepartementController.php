<?php

namespace Modules\RoomManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Modules\RoomManagement\Http\Requests\CreateDepartementRequest;
use Modules\RoomManagement\Models\Departement;

class DepartementController extends Controller
{

    public function index()
    {
        $dep = Departement::all();
        return response()->json([
            'status' => '1',
            'message' => 'Showed successfully!',
            'data' => $dep
        ], 200);

    }

    public function store(CreateDepartementRequest $request)
    {

        $departementData = $request->validated();

        $dep = Departement::query()->create($departementData);

        return response()->json([
            'status' => '1',
            'message' => 'Created successfully!',
            'data' => $dep
        ], 200);

    }


    public function show($id)
    {
        $dep = Departement::query()->find($id);
        return response()->json([
            'status' => '1',
            'message' => 'Showed successfully!',
            'data' => $dep
        ], 200);
    }


    public function update(CreateDepartementRequest $request, $id)
    {

        $dep = Departement::query()->find($id);
        if (!$dep) {
            return response()->json([
                'status' => '0',
                'message' => 'Department not found',
            ], 404);
        }
        $departementData = $request->validated();
       $dep->update(
             $departementData);

        return response()->json([
            'status' => '1',
            'message' => 'Updated successfully',
            'data' => $dep
        ], 200);
    }



        public function destroy($id)
    {
        $dep = Departement::query()->find($id);

        if ($dep) {
            $dep->delete();

            return response()->json([
                'status' => '1',
                'message' => __('Deleted successfuly'),
            ], 200);
        } else {
            return response()->json([
                'status' => '0',
                'message' => __('Invalid ID'),
            ], 404);
        }}

}
