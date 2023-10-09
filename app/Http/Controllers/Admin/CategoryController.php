<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    private $category;
    public function __construct(){
        $this->category = new Category();
    }
    public function getList(){
        $title = 'Admin category';
        $categoryList = $this->category->getList();
        return view('admin.category.list', compact('title','categoryList'))->with('msg','Success');
    }
    public function getAdd(){
        $title = 'Add new category';
        return view('admin.category.add', compact('title'));
    }
    public function postAdd(Request $request){
        
        $request->validate([
            'name' =>'required|unique:categories',
            'description' =>'required|string',
        ],[
            'unique' => ':attribute already exists on the system',
            'required' => ':attribute must be imported',
            'string' => 'attribute is not formatted correctly'
        ],[
            'name' => 'Category name',
            'description' => 'Description',
        ]);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        $this->category->add($data);
        return redirect()->route('admin.categories.getList')->with('msg','More successful category');
    }
    public function getEdit(Request $request, $id=0){  
        if(!empty($id)){ 
        $request->session()->put('id', $id);
        $item = $this->category->getDetail($id);
        } else {
            return redirect()->route('admin.categories.getList')->with('msg','Link does not exist');
        }
        $title = 'Edit category';     
        return view('admin.category.update', compact('title','item'));
    }
    public function postEdit(Request $request){
        $id = session('id');
        if(empty($id)){
            return back()->with('msg','Link does not exist');
        }
        $request->validate([
            'name' =>'required|unique:categories,id,'.$id,
            'description' =>'required|string',
        ],[
            'unique' => ':attribute already exists on the system',
            'required' => ':attribute must be imported',
            'string' => 'attribute is not formatted correctly'
        ],[
            'name' => 'Category name',
            'description' => 'Description',
        ]);
        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];
        $this->category->updateItem($id, $data);
        return redirect()->route('admin.categories.getList')->with('msg','Update successfully');
    }
    public function deleteItem($id=0){
        if(!empty($id)){
            $delete = $this->category->deleteItem($id);
            if($delete){
                $msg = "Deleted successfully";
            } else {
                $msg = "Failed to delete";
            }
        } else {
            $msg = 'Link does not exist';
        }
        return back()->with('msg', $msg);
    }
}
