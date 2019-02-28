<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RoomapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return response()->json($rooms);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'capacity'=>'required',
            'status'=>'required',
            'has_ac'=>'required',
            'has_multimedia'=>'required'
        ]);
        if($validator->fails()){
            return array(
                'error' => true,
                'message'=> $validator->errors()->all()
            );
        }

            $room = Room::create($request->all());
            return "Room has been added";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return response()->json($room);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $room->update($request->all());
        return response()->json($room);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return "Room Deleted Seccussfully";
    }
}
