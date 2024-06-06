<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Location::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'advertiser_id' => 'required|exists:advertisers,id',
            'name' => 'required|string|max:255',
            'coordinates' => 'required|string',
        ]);

        $location = Location::create($validatedData);
        return response()->json($location, 201);
    }

    public function show($id)
    {
        return Location::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->update($request->all());
        return response()->json($location, 200);
    }

    public function destroy($id)
    {
        Location::destroy($id);
        return response()->json(null, 204);
    }
}
