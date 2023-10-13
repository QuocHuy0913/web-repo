<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function getList(){
        $list = Product::all();
        if(!empty($list)) {
            return view('client.shop.index', compact('list'));
        }
        return view('client.shop.index');
    }
}
