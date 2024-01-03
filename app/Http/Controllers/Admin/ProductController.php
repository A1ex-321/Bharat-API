<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Http\Controllers\Controller;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        $data['header_title'] = "Add New Product";
        $categories = CategoryModel::all();
        $brands = BrandModel::all();


        return view('admin.product.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'header_title' => "Add New Product",
        ]);
    }

    public function store(Request $request)
    {
        try {
            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images', $imageName); // The file will be stored in storage/app/public/images
                $imagePath = $image->move(public_path('images'), $imageName);

            } else {
                $imageName = null; // No image uploaded
            }

            // Save the product with other data (including the image path if needed)
            $productData = [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category_id'),
                'brand_id' => $request->input('brand_id'),
                'featured' => $request->input('feature'),
                'image' => $imageName,
                'size' => $request->input('sizes'),
            ];

            ProductModel::create($productData);

            Alert::success('Success', 'Product added successfully!');

            return redirect()->route('products.index')->withSuccess('Product added successfully!');
        } catch (\Exception $e) {
            // Handle the exception

            Alert::error('Error', 'Product creation failed. Please try again.');
            return back()->withInput()->withErrors(['error' => 'Product creation failed. Please try again.']);
        }
    }

    public function destroy(ProductModel $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    public function edit(ProductModel $product)
    {
        $categories = CategoryModel::all();
        $brands = BrandModel::all();

        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
            'header_title' => "Edit Product",
        ]);
    }

    public function update(Request $request, ProductModel $product)
    {
        
        $category = ProductModel::find($product);
        $category = ProductModel::find($product->id);

        // request()->validate(['slug' => 'required|unique:category,slug,' . $id]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // The file will be stored in storage/app/public/images
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = $category->image; // No image uploaded
        }
        $category->name = $request->name;
        $category->price = $request->price;
        $category->description = $request->description;
        $category->category_id = $request->category_id;
        $category->brand_id = $request->brand_id;
        $category->image = $imageName;
        $category->size = $request->sizes;
        $category->featured = $request->feature;


        $category->save();
        return redirect('admin/category/list')->with('success', 'Category Updated successfully');
    }
}
