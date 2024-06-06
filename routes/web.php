<?php

use Illuminate\Support\Facades\Route;
use App\Models\Advertiser;
use App\Models\Location;
use App\Models\Ad;

Route::get('/', function () {
    $advertisers = Advertiser::all();
    return view('advertisers', compact('advertisers'));
});

Route::get('/locations', function () {
    $locations = Location::all();
    return view('locations', compact('locations'));
});

Route::get('/ads', function () {
    $ads = Ad::all();
    return view('ads', compact('ads'));
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


