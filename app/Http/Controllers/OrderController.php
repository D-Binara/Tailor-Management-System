<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class OrderController extends Controller
{


    public function request_order(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch all products for the dropdown menu
        $products = Product::all();

        // Validate the request data
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required',
            'order_type' => 'required',
            'height' => 'required|integer',
            'width' => 'required|integer',
            'color' => 'required',
            'order_date' => 'required|date',
            'delivery_date' => 'nullable|date',
            'status' => 'required|in:pending,processing,completed',
            'quantity' => 'required|integer|min:1',
        ]);

        // Get the selected product
        $product = Product::find($validatedData['product_id']);

        // Calculate the total price based on the selected product and quantity
        $totalPrice = $product->price * $validatedData['quantity'];

        // Add other fields to $validatedData as needed

        // Create a new order using the validated data
        $order = Order::create([
            'user_id' => $user->id,
            'product_id' => $validatedData['product_id'],
            'name' => $validatedData['name'],
            'order_type' => $validatedData['order_type'],
            'height' => $validatedData['height'],
            'width' => $validatedData['width'],
            'color' => $validatedData['color'],
            'order_date' => $validatedData['order_date'],
            'delivery_date' => $validatedData['delivery_date'],
            'status' => $validatedData['status'],
            'price' => $totalPrice,
            'quantity' => $validatedData['quantity'],
            // Add other fields as needed
        ]);

        // Return a response indicating success or failure
        return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
    }

}
