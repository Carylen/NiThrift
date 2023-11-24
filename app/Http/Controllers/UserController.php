<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

// use Illuminate\Validation\Validator;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
       return view('loginPage');
    }

    public function login(Request $request){
        Session::flash('email',$request->email);
    
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            $userHasLogin = Auth::user()->firstName;
            return view('landingPage') ->with('success', 'Hi! '. Auth::user()->firstName . ' ' . Auth::user()->lastName)->with('userHasLogin', compact('userHasLogin'));
        } else {
            return redirect('login')->withErrors('incorrect email or password');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success','Log Out success');
    }

    public function toRegister(){
        return view('registerPage');
    }

    public function register(Request $request){
        Session::flash('fname',$request->fname);
        Session::flash('lname',$request->lname);
        Session::flash('phone',$request->phone);
        Session::flash('email',$request->email);
        // Session::flash('password',$request->password);
        Session::flash('province',$request->province);
        Session::flash('city',$request->city);
        Session::flash('postcode',$request->postcode);

        $request->validate([
            'fname' => 'required',
            'lname'=> 'required',
            'phone'=> 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'province' => 'required'
        ], [
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'email.unique' => 'email already used'
        ]);

        $newData = [
            'firstName' => $request->fname,
            'lastName' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'province' => $request->province,
            'city' => $request->city,
            'postcalCode' => $request->postcode
        ];

        User::create($newData);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return view('landingPage')->with('success', 'Hi! '. Auth::user()->firstName.Auth::user()->lastName)->with(['user' => Auth::user()->firstName]);
        } else {
            return redirect('login')->withErrors('incorrect email or password');
        }
    }

    public function profileSettings(){
        return view('profileSettings');
        
    }    

    public function updateProfileSettings(Request $request){
        // 
    }

    
}
