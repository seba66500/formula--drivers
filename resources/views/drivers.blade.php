@extends('layouts.app')

@section('content')
    <table id="drivers-table">
        <tr>
            <th>Name</th>
            <th>Last name</th>
            <th>Team</th>
            <th>Contract expire</th>
        </tr>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{$driver->name}}</td>
                    <td>{{$driver->last_name}}</td>
                    <td>{{$driver->team}}</td>
                    <td>{{$driver->contract_expire}}</td>
                </tr>
            @endforeach
    </table>
@stop