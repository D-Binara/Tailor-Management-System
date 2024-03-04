<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust as needed
        ], [
            'name.required' => 'Product name is required.',
            'price.required' => 'Product price is required.',
            'price.numeric' => 'Product price must be a number.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image size must be less than 2MB.',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'public/product_images/';
            $image->move($imagePath, $imageName);

            // Save image path to the product
            $validatedData['image'] = $imagePath . $imageName;
        }


        // Create a new product using the validated data
        $product = Product::create($validatedData);

        // Check if the order was created successfully
        if ($product) {
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Product created successfully');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to create product');
        }
    }

    public function getProduct()
    {
        $products = Product::all();

        return view('new_order')->with(compact('products'));

    }

    public function getProductToProduct()
    {
        $product = Product::all();

        return view('product')->with(compact('product'));

    }
}
