<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// use Illuminate\Validation\Validator;

class UserController extends Controller
{
    public function index(){
        // $users = User::all();
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
            return redirect('/')->with('success', 'Log In success');
        } else {
            return redirect('login')->withErrors('incorrect email or password');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success','Log Out success');
    }

    public function register(Request $request){
        
    }
}
