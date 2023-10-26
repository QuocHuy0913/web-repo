<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class OrderDetail extends Model
{
    use HasFactory;
    public function getList($id=null){
        if(!empty($id)){
            $list = orderdetails::where('order_id',$id)->orderBy('created_at','DESC')->get();
            return $list;
        }else{
            $list = orderdetails::orderBy('created_at','DESC')->get();
            return $list;
        }   
    }
    public function addOrderDetail($data){
        $order = orderdetail::insert($data);
        return $order;
    }
}
