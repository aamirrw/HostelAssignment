<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PersonapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::all();
        return response()->json($persons);
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
            'cnic'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'room_id'=>'required'
        ]);
        if($validator->fails()){
            return array(
              'error' => true,
                'message'=> $validator->errors()->all()
            );
        }
        if(Room::find($request->room_id)->person->count() < Room::find($request->room_id)->capacity ) {
            $person = Person::create($request->all());
            return "People has been added";
        }
        else{
            return "Room Capacity is Full";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return response()->json($person);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id;
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return response()->json($person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return "Person Deleted Seccussfully";
    }
}
