@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Locations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Coordinates</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
            <tr>
                <td>{{ $location->name }}</td>
                <td>{{ $location->coordinates }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
