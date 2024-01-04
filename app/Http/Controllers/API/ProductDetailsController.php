<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if($request->input('price'))
            {
             $priceRange = $request->input('price');

             if($priceRange[0] == 1500){
                $records = ProductModel::where('price', '>', 1500)->get();
            }
             else{
             $records = ProductModel::whereBetween('price', $priceRange)->get();
             }
            // Transform each product to include the complete image URL
            $transformedProducts = $records->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'description' => $product->description,
                    'created_at' => $product->created_at,
                    'updated_at' => $product->updated_at,
                    'category_id' => $product->category_id,
                    'brand_id' => $product->brand_id,
                    'size' => $product->size,
                    'featured' => $product->featured,
                    'image' => $product->image ? url('/public/images') . '/' . $product->image : null,
                ];
            });

            return response()->json($transformedProducts);
            }
            else{
            $products = ProductModel::all();

            // Transform each product to include the complete image URL
            $transformedProducts = $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'description' => $product->description,
                    'created_at' => $product->created_at,
                    'updated_at' => $product->updated_at,
                    'category_id' => $product->category_id,
                    'brand_id' => $product->brand_id,
                    'size' => $product->size,
                    'featured' => $product->featured,
                    'image' => $product->image ? url('/public/images') . '/' . $product->image : null,
                ];
            });

            return response()->json($transformedProducts);
        }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $request)
    {
        try {
            
            $productDetails = ProductModel::where('id', $id)->with('category', 'brand')->first();
    
            if ($productDetails) {
                $transformedProductDetails = [
                    'id' => $productDetails->id,
                    'name' => $productDetails->name,
                    'price' => $productDetails->price,
                    'description' => $productDetails->description,
                    'created_at' => $productDetails->created_at,
                    'updated_at' => $productDetails->updated_at,
                    'category' => $productDetails->category,
                    'brand' => $productDetails->brand,
                    'size' => $productDetails->size,
                    'featured' => $productDetails->featured,
                    'image' => $productDetails->image ? url('/public/images') . '/' . $productDetails->image : null,
                ];

                return response()->json($transformedProductDetails);
            } else {
                return response()->json(['error' => 'Product not found']);
            }
        
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error']);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
