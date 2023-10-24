<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
class CartController extends Controller
{
    //
    private $order;
    private $orderdetail;
    public function __construct(){
        $this->order = new Order();
        $this->orderdetail = new OrderDetail();
    }
    public function showCart(){
        return view('client.cart.index');
    }
    public function checkout(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $order = new Order;
        $order->user_id = Auth()->user()->id;
        $order->name = $name;
        $order->total = 0;
        $order->status = 0;
        $order->address = $address;
        $order->phone = $phone;
        $order->save();
        $idOrder = $order->id;
        if(!empty(Session("Cart")->products)){
            foreach(Session("Cart")->products as $item){
                $data = [
                    'order_id' => $idOrder,
                    'product_id' => $item['productInfo']->id,
                    'price' => $item['price'],
                    'amount' => $item['quantity'],
                ];            
                $this->orderdetail->addOrderDetail($data);
                $product = Product::find($item['productInfo']->id);
                $product->amount = $product->amount - $item['quantity'];
                $product->save();
            }
            $data = [
                Session('Cart')->totalPrice
            ];
            $this->order->updatePriceOrder($idOrder,$data);
            $oldCart = Session('Cart') ? Session('Cart'):null;
            $oldCart->deleteAllCart();
            $request->session()->forget('Cart');
            return redirect()->route('cart');
        }else{
            return redirect()->route('cart');
        }
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
