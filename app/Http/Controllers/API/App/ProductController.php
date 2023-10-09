<?php

namespace App\Http\Controllers\API\App;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getList() {
        $list = Product::all();
        if(count($list) > 0) {
            return response($list,200);
        }
        return response("Not found",404);
    }
}
