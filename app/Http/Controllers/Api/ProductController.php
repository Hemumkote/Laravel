<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::get();
        if ($products->count() > 0) {
            return ProductResource::collection($products);
        } else {
            return response()->json(['message' => 'no record available'], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|required|max:255',
                'description' => 'required',
                'price' => 'required|integer'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['message' => 'allfields are required', 'error' => $validator->messages()], 422);
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json(['message' => 'Product created successfully', 'data' => new ProductResource($product)], 200);
    }
    public function show(Product $product)
    {
        return new ProductResource($product);
    }
    public function update(Product $product, Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|required|max:255',
                'description' => 'required',
                'price' => 'required|integer'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['message' => 'allfields are required', 'error' => $validator->messages()], 422);
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json([
            'message' => "Product Updated Successfully",
            'data' => new ProductResource($product)
        ], 200);
    }
    public function destroy(Product $product, Request $request)
    {
        $product->delete();
        return response()->json([
            'message' => 'Product Deleted Successfully'
        ], 200);
    }
}
