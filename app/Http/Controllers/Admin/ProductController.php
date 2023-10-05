<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getList(){


        return view('admin.product.list');

    }
    public function getAdd() {
        return view('admin.product.add');
    }
    public function postAdd(){

    }
    public function getDetailForAdmin(){

    }
    public function getDetailForClient(){

    }
    public function getUpdate() {

    }
    public function postUpdate(){

    }
    public function delete(){

    }
}
