<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function request_order(Request $request)
    {

        $details = Auth::user();

        if ($request->filled('user_name')) {
            $details->username = $request->user_name;
        }

        if ($request->filled('phone_number')) {
            $details->phone = $request->phone_number;
        }

        if ($request->filled('mobile_number')) {
            $details->mobile = $request->mobile_number;
        }

        if ($request->filled('address')) {
            $details->address = $request->address;
        }

        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'public/profile_picture/';
            $image->move($imagePath, $imageName);

            // Save image path to the subject
            $details->profile_picture = $imagePath . $imageName;
        }

        $details->update();

        return back();

    }
}
