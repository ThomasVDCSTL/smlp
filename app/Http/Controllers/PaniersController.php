<?php

namespace App\Http\Controllers;

use App\Models\panier;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepaniersRequest;
use App\Http\Requests\UpdatepaniersRequest;
use Illuminate\Http\Request;

class PaniersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return panier::all();
    }

    public function store(Request $request)
    {
        $panier = panier::create($request->all());
        return response()->json($panier, 201);
    }

    public function show(panier $panier)
    {
        return $panier;
    }

    public function update(Request $request, panier $panier)
    {
        $panier->update($request->all());
        return response()->json($panier, 200);
    }

    public function destroy(panier $panier)
    {
        $panier->delete();
        return response()->json(null, 204);
    }
}
