<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discounts';
    public function getList(){
        $discount = discounts::all();
        return $discount;
    }
    public function addDiscount($data){
        return discounts::insert($data);
    }
    public function getDetail($id){
        return discounts::where('id',$id)->first();
    }
    public function updateDiscount($id,$data){
        $discount = discounts::where('id',$id)->update($data);
        return $discount;
    }      
    public function deleteItem($id){
        $discount = discounts::where('id',$id)->delete();
        return $discount;
    }
    public function getPrice($id){
        $price = discounts::where('$rank_id', $id)->select('price')->get();
        return $price;
    }
}
