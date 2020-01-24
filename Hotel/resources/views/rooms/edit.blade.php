@extends('layouts.app')

@section('content')
       
<h1 style="text-align:center">Edit Rooms</h1>
<form action="{{route('updateRoom', $room->id)}}" method="POST" id="form">
    @csrf
    <div class="form-group">
        <label for="roomName">Name</label>
        <input type="text" class="form-control" id="roomName" name="name" aria-describedby="emailHelp" value="{{$room->name}}">
    </div>
    <div class="form-group">
        <label for="roomNumber">Number</label>
        <input type="text" class="form-control" id="roomNumber" name="number" aria-describedby="emailHelp" value="{{$room->number}}">
    </div>
    <div class="form-group">
        <label for="Price">Price (€)</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" value="{{$room->price}}">
    </div>
    <div class="form-group">
        <label for="Type">Type (Standard, Deluxe, Superior, Luxurious) </label>
        <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" value="{{$room->type}}">
    
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection

