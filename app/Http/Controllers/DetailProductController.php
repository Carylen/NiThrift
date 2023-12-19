<?php

namespace App\Http\Controllers;

use App\Models\DetailProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailProductController extends Controller
{
    public function index(){
        $data = DetailProduct::all();
        return view('component.highlightProduct', ['product' => $data]);
    }
    
    public function detailProduct($id){
        $product = DetailProduct::where('id',$id)->get();
        if($product){
            return view('component.detailProducts', ['detailProduct' => $product]);
        }else {
            return redirect('/')->withErrors('not found');
        }
    }

    public function uploadPage(){
        // check if isLogin = TRUE, dapat upload product
        if(Auth::check()){
            $user = User::where('id', Auth::user()->id)->get();
            return view('component.updateProduct', ['user' => $user]);
        }
        else{
            // if isLogin = FALSE, harus login terlebih dahulu
            return view('loginPage');
        }
    }

    public function uploadRequest(Request $request, $id){
        $data = new DetailProduct();
        $seller = User::where('id', $id)->first();
        
        $photo = $request->file('photoProduct');
        $request->validate([ 'photoProduct' =>'required|mimes:png,jpg,jpeg' ]);

        if($request->hasFile('photoProduct')){
            $path = 'photoProduct';
            $photoExtension = $photo->extension();
            $photoOriginal = $photo->getClientOriginalName();
            $photoName = $path . "/" . "-" . $photoOriginal . "." . $photoExtension;
            $photo->move(public_path($path), $photoName);
            $data->image = $photoName;
        }

        // cek tiap field apakah menerima input dari user atau tidak, if True -> update to db
        $request->validate([
            'itemName' => 'required',
            'itemSize' => 'required',
            'itemPrice' => 'required',
            'itemCondition' => 'required',
            'itemCategory' => 'required'
        ]);
                            
        $data->users_id = $id;
        $data->name = $request->itemName;
        $data->size = $request->itemSize;
        $data->price = $request->itemPrice;
        $data->condition = $request->itemCondition;
        $data->category = $request->itemCategory;
        $data->location = $seller->province . ", " . $seller->postcalCode;
        $data->sellerName = $seller->firstName . " " . $seller->lastName;
        $data->sellerNumber = $seller->phone;
        // dump($data);
        
        $data->save();

        return redirect('/')->with('success', 'Data updated successfully');
    }

    public function cart(){
        
    }
}
