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

        // Validate the request data
        $validatedData = $request->validate([
            'order_type' => 'required',
            'height' => 'required|integer',
            'width' => 'required|integer',
            'color' => 'required',
            'delivery_date' => 'nullable|date',
            'status' => 'pending',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ], [
            'user_id.required' => 'User ID is required.',
            'user_id.exists' => 'User does not exist.',
            'name.required' => 'Name is required.',
            'order_type.required' => 'Order type is required.',
            'height.required' => 'Height is required.',
            'height.integer' => 'Height must be an integer.',
            'width.required' => 'Width is required.',
            'width.integer' => 'Width must be an integer.',
            'color.required' => 'Color is required.',
            'order_date.required' => 'Order date is required.',
            'order_date.date' => 'Order date must be a valid date.',
            'delivery_date.date' => 'Delivery date must be a valid date.',
            'status.required' => 'Status is required.',
            'status.in' => 'Invalid status provided.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a numeric value.',
            'quantity.required' => 'Quantity is required.',
            'quantity.integer' => 'Quantity must be an integer.',
            'quantity.min' => 'Quantity must be at least :min.',
        ]);

        // Add 'user_id' and name to the validated data
        $validatedData['user_id'] = $user->id;
        $validatedData['name'] = $user->name;

        // Set the current timestamp as the order date
        $validatedData['order_date'] = now();


        // Create a new order using the validated data
        $order = Order::create($validatedData);

        // Check if the order was created successfully
        if ($order) {
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Order created successfully');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to create order');
        }

    }

    public function getProduct()
    {
        $products = Product::all();

        return view('new_order', compact('products'));
    }


}
