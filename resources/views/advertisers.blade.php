@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Advertisers</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($advertisers as $advertiser)
            <tr>
                <td>{{ $advertiser->name }}</td>
                <td>{{ $advertiser->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
