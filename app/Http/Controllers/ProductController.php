<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProduitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // app/Http/Controllers/API/ProductController.php

    /**
     * renvoie la liste des produits
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Product::all();
    }
    /**
     * enregistre un produit
     * @param StoreProductRequest $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(StoreProductRequest $request)
    {
        $produit = Product::create($request->all());

        return response()->json($produit, 201);
    }
    /**
     * renvoie un produit
     * @param Product $produit
     * @return Product
     */

    public function show(Product $produit)
    {
        return $produit;
    }
    /**
     * met à jour un produit
     * @param UpdateProduitRequest $request
     * @param Product $produit
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Product $produit)
    {
        $produit->update($request->all());
        return response()->json($produit, 200);
    }
    /**
     * supprime un produit
     * @param Product $produit
     * @return Product
     */
    public function destroy(Product $produit)
    {
        $produit->delete();
        return $produit;
    }
}
