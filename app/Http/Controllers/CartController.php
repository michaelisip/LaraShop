<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Cart;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->first();

        return view('user.cart', ['cartProducts' => $cart->products]);
    }

    public function addToCart($id)
    {
        $user_id = Auth::user()->id;

        $cart = Cart::firstOrCreate(['user_id' => $user_id]);
        $product = Product::findOrFail($id);

        $cart->products()->save($product);

        return back()->with(['success' => 'Successfully Added To Cart!']);
    }

    public function removeToCart($id)
    {
        $user_id = Auth::user()->id;

        $cart = Cart::firstOrCreate(['user_id' => $user_id]);

        $cart->products()->detach($id);

        return back()->with(['success' => 'Successfully Removed To Cart!']);
    }
}
