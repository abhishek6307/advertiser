@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ads</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Ad Spend</th>
                <th>Business Crypto Acquired</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ads as $ad)
            <tr>
                <td>{{ $ad->ad_spend }}</td>
                <td>{{ $ad->business_crypto_acquired }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
