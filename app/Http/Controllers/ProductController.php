<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('shop.index',['products'=>$products]);
    }

    public function getAddToCart(Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    public function getCart()
    {
        if(!Session::has('cart')){
            return view('shop.shopping-cart',['product'=> null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart',[
            'product'=>$cart->items,'totalPrice',
            'totalPrice'=>$cart->totalPrice
        ]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total =  $cart->totalPrice;

        return view('shop.checkout',['total'=>$total]);
    }
    public function postCheckout(){

    }
}
