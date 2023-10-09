<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function getList(){
        return view('admin.brand.list');

    }
    public function getAdd() {
        return view('admin.brand.add');
    }
}
