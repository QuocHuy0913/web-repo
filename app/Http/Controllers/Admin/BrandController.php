<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function __construct(){
        $this -> brands = new Brand();
    }

    public function getLists(){
        $title = 'Danh sách thương hiệu';
        $brandlist = Brand::all();
        return view('admin.brand.list', compact('title','brandlist'));
    }

    public function getAdd(){
        $title = 'Thêm thương hiệu';
        return view('admin.brand.add', compact('title'));
    }

    public function postAdd(Request $req){
        $req ->validate([
            'name' => 'required | unique:brands,name,'.$req->name,
            'description' => 'required | string'
        ]);

        $data = [
            "name" => $req->name,
            "description" => $req->description,
            "created_at" => Date('Y-m-d H:i:s')
        ];

        $this -> brands -> AddBrand($data);
        return redirect()->route('admin.brands.getList');
    }

    public function getUpdate($id = 0){
        if(!empty($id)){
            $brand = $this -> brands -> GetBrand($id);
            return view('admin.brand.update', compact('brand'));
        }
    }

    public function postUpdate(Request $req, $id){
        $req ->validate([
            'name' => 'required | unique:brands,name,'.$id,
            'description' => 'required | string',
        ]);

        $data = [
            "id" => $req->id,
            "name" => $req->name,
            "description" => $req->description,
            "updated_at" => Date('Y-m-d H:i:s')
        ];

        $this -> brands -> UpdateBrand($data);
        return redirect()->route('admin.brands.getList');
    }

    public function delete($id = 0){
        if(!empty($id)){
            $this -> brands -> DeleteBrand($id);
            return redirect() -> route('admin.brands.getList');
        }
    }
}
