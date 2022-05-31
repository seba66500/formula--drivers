@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Descrption</th>
                <th>Penalty points</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penalty as $pen)
                <tr>
                    <td>{{$pen->name}}</td>
                    <td>{{$pen->description}}</td>
                    <td>{{$pen->penalty_points}}</td>
                    <td>{{$pen->date}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop