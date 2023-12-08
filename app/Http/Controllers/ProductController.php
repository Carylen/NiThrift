<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product-name' => 'required|string|max:255',
            'product-description' => 'required|string',
            'starting-price' => 'required|numeric|min:0',
            'product-image' => 'required|image',
            'start-time' => 'required|date',
            'end-time' => 'required|date|after:start-time',
        ]);

        // Handle file upload
        $imagePath = $request->file('product-image')->store('product_images', 'public');

        // Get the authenticated user
        $user = Auth::user();

        // Create product with user_id
        $product = new Product([
            'product_name' => $request->input('product-name'),
            'product_description' => $request->input('product-description'),
            'starting_price' => $request->input('starting-price'),
            'product_image' => $imagePath,
            'start_time' => $request->input('start-time'),
            'end_time' => $request->input('end-time'),
            'user_id' => $user->id,
        ]);


        return redirect('/home')->with('success', 'Product added successfully');
    }
}
