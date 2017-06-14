<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('shop.index', compact('products'));
    }

    public function getAddToCart(Request $request, $id)
    {
    	$product = Product::find($id);
    	$oldCart = session()->has('cart') ? session()->get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);
    $request->session()->put('cart', $cart);
    dd($request->session()->get('cart'));
    return redirect()->route('product.index');
	}
}
