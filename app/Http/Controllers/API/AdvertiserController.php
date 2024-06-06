<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdvertiserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Advertiser::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:advertisers',
            'password' => 'required|string|min:8',
        ]);

        $advertiser = Advertiser::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return response()->json($advertiser, 201);
    }

    public function show($id)
    {
        return Advertiser::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $advertiser = Advertiser::findOrFail($id);
        $advertiser->update($request->all());
        return response()->json($advertiser, 200);
    }

    public function destroy($id)
    {
        Advertiser::destroy($id);
        return response()->json(null, 204);
    }
}
