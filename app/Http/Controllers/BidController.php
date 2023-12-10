<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\DetailProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class BidController extends Controller
{
    public function index()
    {
    $bids = Bid::with(['user', 'product'])->get();
    return view('component.detailProduct', ['bids' => $bids]);
    }
    
    public function placeBid(Request $request, $id)
{
    // Get product
    $product = DetailProduct::findOrFail($id);

    // Check if the authenticated user is the seller
    if (Auth::id() == $product->users_id) {
        return redirect()->route('detailProduct', ['id' => $id])
            ->with('error', 'You cannot bid on your own product.');
    }

    // Validate the bid request
    $validator = Validator::make($request->all(), [
        'bid_amount' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        return redirect()->route('detailProduct', ['id' => $id])
            ->withErrors($validator)
            ->withInput();
    }

    // Check if there are any existing bids
    $currentBid = $product->bids()->latest('created_at')->first();

    // Compare the bid amount
    if ($currentBid) {
        if ($request->input('bid_amount') > $currentBid->bid_amount) {
            // New bid is higher than the current bid
            // You can store the new bid here
            $bid = new Bid();
            $bid->user_id = auth()->id();
            $bid->product_id = $id;
            $bid->bid_amount = $request->input('bid_amount');
            $bid->save();

            return redirect()->route('detailProduct', ['id' => $id])->with('success', 'Bid placed successfully!');
        } else {
            // New bid is not higher than the current bid
            return redirect()->route('detailProduct', ['id' => $id])
                ->with('error', 'Bid amount must be higher than the current bid.')
                ->withInput();
        }
    } else {
        // There are no existing bids, compare with the initial price
        if ($request->input('bid_amount') >= $product->initial_price) {
            // New bid is equal to or higher than the initial price
            // You can store the new bid here
            $bid = new Bid();
            $bid->user_id = auth()->id();
            $bid->product_id = $id;
            $bid->bid_amount = $request->input('bid_amount');
            $bid->save();

            return redirect()->route('detailProduct', ['id' => $id])->with('success', 'Bid placed successfully!');
        } else {
            // New bid is lower than the initial price
            return redirect()->route('detailProduct', ['id' => $id])
                ->with('error', 'Bid amount must be equal to or higher than the initial price.')
                ->withInput();
        }
    }
}
}
