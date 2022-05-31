@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Descrption</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reprimends as $reprimend)
                <tr>
                    <td>{{$reprimend->name}}</td>
                    <td>{{$reprimend->description}}</td>
                    <td>{{$reprimend->type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop