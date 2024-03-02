<?php

namespace App\Http\Controllers;

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
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Create a new product using the validated data
        $product = Product::create($validatedData);

        // Return a response indicating success or failure
        return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
    }
}
