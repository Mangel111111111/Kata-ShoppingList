<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return response()->json($product, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'ProductName' => $request->ProductName,
        ]);
        $product->save();
        return response()->json($product, 200);
    }

    /**
     * Display the specified resource.
     */
    /* public function show(Product $product)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     */
    /* public function edit(Product $product)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        
        $product->update([
            'ProductName' => $request->ProductName,
        ]);
        $product->save();
        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        $product->delete();

        return response()->json($product, 200);
    }

    public function destroyAll()
    {
        $product = Product::all();

        foreach($product as $item) {
            $item->delete();
        }

        return response()->json($product, 200);
    }
}
