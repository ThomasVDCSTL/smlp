<?php

namespace App\Http\Controllers;

use App\Models\Order_product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecommandesRequest;
use App\Http\Requests\UpdatecommandesRequest;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;

class Order_productController extends Pivot
{
    /**
     * Display a listing of the resource.
     */
//    public function index()
//    {
//        $commandList = Order_product::with('produits')->get();
//        return $commandList;
//    }
//
//    public function store(Request $request)
//    {
//        $commande = Order_product::create($request->all());
//        return response()->json($commande, 201);
//    }
//
//    public function show(Order_product $commande)
//    {
//        return $commande::with('produits')->get();
//    }
//
//    public function update(Request $request, Order_product $commande)
//    {
//        $commande->update($request->all());
//        return response()->json($commande, 200);
//    }
//
//    public function destroy(Order_product $commande)
//    {
//        $commande->delete();
//        return response()->json(null, 204);
//    }

}
