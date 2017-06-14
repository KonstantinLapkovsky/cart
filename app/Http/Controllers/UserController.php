<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['getProfile', 'getLogout']);
        $this->middleware('guest')->except(['getProfile', 'getLogout']);
    }

    public function getSignup() {
    	return view('user.signup');
    }

    public function postSignup(Request $request) {

    	$this->validate($request, [
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6|confirmed'
    	]);
    	$user = User::create([
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);

        auth()->login($user);

    	return redirect()->route('user.profile');
    }

    public function getSignin() {
        return view('user.signin');
    }

    public function postSignin(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }

    public function getProfile() 
    {
        return view('user.profile');
    }

    public function getLogout()
    {
        auth()->logout();
        return redirect()->route('product.index');

    }

}
