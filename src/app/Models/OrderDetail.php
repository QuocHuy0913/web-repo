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
            $list = OrderDetail::where('order_id',$id)->orderBy('created_at','DESC')->get();
            return $list;
        }else{
            $list = OrderDetail::orderBy('created_at','DESC')->get();
            return $list;
        }
    }
    public function addOrderDetail($data){
        $order = OrderDetail::insert($data);
        return $order;
    }
}
