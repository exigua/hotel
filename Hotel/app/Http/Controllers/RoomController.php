<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;

use Validator;


class RoomController extends Controller
{
    public function showRooms() {

        $rooms = Room::All();
        return view('rooms.show', compact('rooms'));
    }

    public function edit($id) {

        $room = Room::find($id);
        
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id) {

        $room = Room::find($id);
        
        $room->name = $request->name;
        $room->number = $request->number;
        $room->price = $request->price;
        $room->type = $request->type;
        
        $room->save();
        return redirect('/rooms');
    }
    public function delete($id) {

        $room = Room::find($id);
        
        $room->delete();

        return redirect('/rooms');

    }

    public function createRooms() {

        $room =Room::All();

        return view('rooms.createRoom', compact('room'));
    }
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' =>'required|max:50|string',
            'number' => 'required|integer',
            'price' => 'required|integer',
            'type' => 'required|max:50|string',
        ]);
            

        if ($validator->fails()) {

            return redirect ('createRoom')
                ->withErrors($validator)
                ->withInput();
            
        }  else {

        $room = new Room([
            "name" => $request->name,
            "number" => $request->number,
            "price" => $request->price,
            "type" => $request->type,
        ]);

        $room->save();

        return redirect('/rooms');
    }

    }
}