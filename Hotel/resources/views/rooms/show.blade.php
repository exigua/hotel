@extends('layouts.app')

@section('content')

        <table>
            <thead>
                <tr>
                    <th colspan="8" style="text-align:center">Rooms</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped table-dark">
                    <th style="text-align:center">Name</th>
                    <th style="text-align:center">Number</th>
                    <th style="text-align:center">Price (€)</th>
                    <th style="text-align:center">Type</th>
                @if (Auth::check())
                    @if (Auth::user()->role == 'administrator')          
                    <th style="text-align:center">Edit</th>
                    <th style="text-align:center">Delete</th>
                    <form action="{{route('createRoom')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Create</button>
                    
                    @endif
                    </form>
                    @endif
                </tr>
                @foreach($rooms as $room)
                <tr class="table table-striped table-dark">
                    <td style="text-align:center">{{$room->name}}</td>
                    <td style="text-align:center">{{$room->number}}</td>
                    <td style="text-align:center">{{$room->price}}</td>
                    <td style="text-align:center">{{$room->type}}</td>
                    <td style="text-align:center">
                        <form action="{{route('editRoom', $room->id)}}" method="POST">
                            @csrf
                        @if (Auth::check())
                            @if (Auth::user()->role == 'administrator') 
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </td>
                    <td style="text-align:center">
                        <form action="{{route('deleteRoom', $room->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Delete</button>
                           @endif
                        </form>
                       @endif 
                    </td>  
                </tr>
                @endforeach
            </tbody>
        </table><br>
@endsection
