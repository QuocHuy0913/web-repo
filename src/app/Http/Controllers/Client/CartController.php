<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
class CartController extends Controller
{
    //
    public function showCart(){
        return view('client.cart.index');

    }
    public function addToCart(Request $req, $id){
        $product = Product::find($id);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addToCart($product,$id);
            $req->session()->put('Cart',$newCart);
        }
        $amount = Session('Cart')->totalQuantity;
        return $amount;
    }
    public function updateItemListCart(Request $req, $id, $quantity) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateItemCart($id, $quantity);
        $req->session()->put('Cart',$newCart);
        return response([
            Session('Cart')->products[$id],
            Session('Cart')->totalQuantity,
            Session('Cart')->totalPrice
        ]);
    }
    public function deleteItemListCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if(Count($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
            return response([
                Session('Cart')->totalQuantity,
                Session('Cart')->totalPrice
            ]);
        }
        else {
            $req->session()->forget('Cart');
            return response(0);
        }

    }

}
