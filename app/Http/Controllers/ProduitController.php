<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // app/Http/Controllers/API/ProduitController.php

    public function index()
    {
        return Produit::all();
    }

    public function store(Request $request)
    {
        $produit = Produit::create($request->all());
        return response()->json($produit, 201);
    }

    public function show(Produit $produit)
    {
        return $produit;
    }

    public function update(Request $request, Produit $produit)
    {
        $produit->update($request->all());
        return response()->json($produit, 200);
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return response()->json(null, 204);
    }
}
