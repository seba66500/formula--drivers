@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Drivers </th>
                <th>Name</th>
                <th>Last name</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{$driver->id}}</td>
                    <td>{{$driver->name}}</td>
                    <td>{{$driver->last_name}}</td>
                    <td>{{$driver->team}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop