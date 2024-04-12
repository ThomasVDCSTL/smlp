<?php

namespace App\Http\Controllers;

use App\Models\artisan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreartisanRequest;
use App\Http\Requests\UpdateartisanRequest;
use Illuminate\Http\Request;



class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return artisan::all();
    }

    public function store(Request $request)
    {
        $artisan = artisan::create($request->all());
        return response()->json($artisan, 201);
    }

    public function show(artisan $artisan)
    {
        return $artisan;
    }

    public function update(Request $request, artisan $artisan)
    {
        $artisan->update($request->all());
        return response()->json($artisan, 200);
    }

    public function destroy(artisan $artisan)
    {
        $artisan->delete();
        return response()->json(null, 204);
    }
}
