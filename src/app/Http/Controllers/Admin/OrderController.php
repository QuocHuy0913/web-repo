<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    //
    public function getList(){
        $title = 'List of Orders';
        $list = Order::all();
        if(!empty($list)) {
            return view('admin.order.list', compact('title','list'));
        }
        return view('admin.order.list',compact('title'));
    }
}
