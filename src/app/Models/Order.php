<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public function getList($id=null){
        if(!empty($id)){
            $order=orders::where('user_id',$id)->orderBy('created_at','DESC')->get();
        }else{
            $order=orders::orderBy('created_at','DESC')->get();
        }
    }
    public function getListByIdOrder($id=null){
        if(!empty($id)){
            $order=orders::where('id',$id)->orderBy('created_at','DESC')->get();
        }else{
            $order=orders::orderBy('created_at','DESC')->get();
        }
        return $order;
    }
    public function addOrder($data){
        $insertedId=orders::insertGetId($data);
        return $insertedId;
    }
    public function updatePriceOrder($id,$data){
        $data[] = $id;
        return DB::update('UPDATE '.$this->table.' SET total = ? where id = ?',$data);
    }
    public function updateDiscount($id, $data){
        $data[] = $id;
        return DB::update('UPDATE '.$this->table.' SET discount_id = ? where id = ?', $data);
    }
    public function updateStatusOrder($id,$status){
        return orders::where('id',$id)->update(['status' => $status]);
    }
}
