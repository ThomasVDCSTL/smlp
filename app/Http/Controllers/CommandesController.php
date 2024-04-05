<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecommandesRequest;
use App\Http\Requests\UpdatecommandesRequest;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return commande::all();
    }

    public function store(Request $request)
    {
        $commande = commande::create($request->all());
        return response()->json($commande, 201);
    }

    public function show(commande $commande)
    {
        return $commande;
    }

    public function update(Request $request, commande $commande)
    {
        $commande->update($request->all());
        return response()->json($commande, 200);
    }

    public function destroy(commande $commande)
    {
        $commande->delete();
        return response()->json(null, 204);
    }
}
