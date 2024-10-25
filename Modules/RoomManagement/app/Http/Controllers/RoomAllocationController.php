<?php

namespace Modules\RoomManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomAllocationController extends Controller
{

    public function index()
    {

    }



    public function store(Request $request)
    {

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
