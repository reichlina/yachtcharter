<?php

namespace App\Http\Controllers;

use App\Cart;
use App\SegelYachts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class YachtController extends Controller
{
    public function getSegelYachts()
    {
        $segelyachts = SegelYachts::all();
        return view('shop.segelyacht', ['segelyachts' => $segelyachts]);
    }

    public function getAddtoCart(Request $request, $id) {
        $yacht = SegelYachts::find($id);
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($yacht, $yacht->id);

        $request->session()->put('Cart', $cart);
        return redirect()->route('start');
    }

    public function getCart() {
        if (!Session::has('Cart)')) {
            return view('shop.shoppingCart',['products' => null]);
        }
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);
        return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
