<?php

namespace Modules\RoomManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\RoomManagement\Http\Requests\CreateRoomRequest;
use Modules\RoomManagement\Models\Room;

class RoomController extends Controller
{

    public function index()
    {
        return view('roommanagement::index');
    }


    public function store(CreateRoomRequest $request)
    {           $roomData= $request->validated();

        $room = Room::query()->create($roomData);

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('roommanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('roommanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
