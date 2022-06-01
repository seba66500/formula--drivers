@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contracts as $contract)
                <tr>
                    <td>{{$contract->name}}</td>
                    <td>{{$contract->team}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop