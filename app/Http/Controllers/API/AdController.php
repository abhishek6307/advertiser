<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ad::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'advertiser_id' => 'required|exists:advertisers,id',
            'location_id' => 'required|exists:locations,id',
            'ad_spend' => 'required|numeric',
            'business_crypto_acquired' => 'required|numeric',
        ]);

        $ad = Ad::create($validatedData);
        return response()->json($ad, 201);
    }

    public function show($id)
    {
        return Ad::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $ad = Ad::findOrFail($id);
        $ad->update($request->all());
        return response()->json($ad, 200);
    }

    public function destroy($id)
    {
        Ad::destroy($id);
        return response()->json(null, 204);
    }
}
