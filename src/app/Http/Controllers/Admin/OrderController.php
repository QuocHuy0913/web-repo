<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\models\OrderDetail;
class OrderController extends Controller
{
    //
    private $order;
    private $orderDetail;
    public function __construct(){
        $this->order = new Order();
        // $this->orderDetail = new OrderDetail();
    }
    public function getList(){
        $title = 'List of Orders';
        $list = Order::all();
        if(!empty($list)) {
            return view('admin.order.list', compact('title','list'));
        }
        return view('admin.order.list',compact('title'));
    }
    public function getOrderDetail($id) {
        $orderDetailList = OrderDetail::find($id)->first();
        return view('admin.order.list_detail_order',compact('orderDetailList','title'));
    }
    public function getOrderHistory() {
        $order = OrderDetail::getList(auth()->user()->id);
        return view('client.order_history',compact('order'));
    }
    public function getUpdateStatusOrder($id){
        $order = OrderDetail::getListByIdOrder($id)[0];
        return view('admin.order.update',compact('order'));
    }
    public function postUpdateStatusOrder(Request $req, $id) {
        OrderDetail::updateStatusOrder($req->maOrder,$req->status);
        return back()->with('msg','Cập nhật đơn hàng thành công');
    }
}
