<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Models\Order_product;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepaniersRequest;
use App\Http\Requests\UpdatepaniersRequest;
use Illuminate\Http\Request;
use function PHPUnit\TestFixture\func;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderList = Order::with('products')->get();
        $orderList->each(function ($order) {
            $order->products->each(function ($product) {
                $product->makeHidden(
                    'artisan_uuid',
                    'image',
                    'description',
                    'pivot',
                    'created_at',
                    'updated_at',
                    'material');
            });
        });
        return response()->json($orderList, 201);
    }

    public function store(Request $request)
    {
        $newOrder = new Order($request->all());
        $user = auth()->user();
        $user->orders()->save($newOrder);
        return $newOrder;
    }

    public function show(Order $panier)
    {
        return $panier;
    }

    public function update(Request $request, Order $panier)
    {
        $panier->update($request->all());
        return response()->json($panier, 200);
    }

    public function destroy(Order $panier)
    {
        $panier->delete();
        return response()->json(null, 204);
    }
    public function addToCart(AddToCartRequest $request)
    {
        $user = auth()->user();
        $order = $user->orders()->firstOrCreate(['status' => 'not_ordered']);
        $order->products()->attach($request->input('product_uuid'), ['quantity' => $request->input('quantity')]);

        return $order::with('products')->get();
    }
}
