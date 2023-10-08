<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    public function ListBrands(){
        return DB::table($this -> table) -> get();
    }

    public function AddBrand($data){
        return DB::table($this -> table)
        -> insert([
            'name' => $data['name'],
            'description' => $data['description'],
            'created_at' => $data['created_at']
        ]);
    }

    public function GetBrand($id){
        return DB::table($this -> table) -> find($id);
    }

    public function UpdateBrand($data){
        return DB::table($this -> table)
        -> where('id', $data['id'])
        -> update([
            'name' => $data['name'],
            'description' => $data['description'],
            'updated_at' => $data['updated_at']
        ]);
    }

    public function DeleteBrand($id){
        return DB::table($this -> table) -> where('id', $id) -> delete();
    }
}
