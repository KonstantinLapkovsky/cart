<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create() {
    	return view('user.signup');
    }

    public function store(Request $request) {

    	$this->validate($request, [
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6|confirmed'
    	]);
    	User::create([
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);

    	return redirect()->route('product.index');
    }
}
