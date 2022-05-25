@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Team</th>
                <th>Contract expire</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{$driver->name}}</td>
                    <td>{{$driver->last_name}}</td>
                    <td>{{$driver->team}}</td>
                    <td>{{$driver->contract_expire}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop