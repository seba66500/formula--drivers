@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Points</th>
                <th>Bahrain</th>
                <th>Saudi Arabia</th>
                <th>Australia</th>
                <th>Imola</th>
                <th>Miami</th>
                <th>Spain</th>
            </tr>
        </thead>
        <tbody>
            @foreach($standings as $driver)
                <tr>
                    <td>{{$driver->name}}</td>
                    <td>{{$driver->points}}</td>
                    <td>{{$driver->bahrain}}</td>
                    <td>{{$driver->saudi_arabia}}</td>
                    <td>{{$driver->australia}}</td>
                    <td>{{$driver->italy}}</td>
                    <td>{{$driver->miami}}</td>
                    <td>{{$driver->spain}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop