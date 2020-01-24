@extends('layouts.app')

@section('content')


<h1 style="text-align:center">Create Rooms</h1>
<form action="storeRoom" method="POST" id="form">
    @csrf
    <div class="form-group">
        <label for="roomName">Name</label>
        <input type="text" class="form-control" id="roomName" name="name" aria-describedby="emailHelp" placeholder="Enter room name">
    </div>
    <div class="form-group">
        <label for="roomNumber">Number</label>
        <input type="text" class="form-control" id="roomNumber" name="number" aria-describedby="emailHelp" placeholder="Enter room number">
    </div>
    <div class="form-group">
        <label for="price">Price (€)</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Enter price">
    </div>
    <div class="form-group">
        <label for="Type">Type (Standard, Deluxe, Superior, Luxurious) </label>
        <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" placeholder="Enter type">
    
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection


  