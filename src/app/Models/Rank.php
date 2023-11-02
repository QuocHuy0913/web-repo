<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Order;
use App\Models\User;

class Rank extends Model
{
    use HasFactory;
    protected $table = "ranks";
    public function getList(){
        return ranks::all();
    }
    public function add($data){
        return ranks::insert($data);
    }
    public function getDetail($id){
        return ranks::where('id',$id)->first();
    }
    public function updateRank($id,$data){
        return ranks::where('id',$id)->update($data);
    }
    public function deleteItem($id){
        return ranks::where('id',$id)->delete();
    }
    public function getNameRank($id){
        if(!empty($id)){
            $rank = ranks::where('id',$id)->select('name')->get();
        }
         
        return $rank;
    }
    public function getValue($id){
        return ranks::where('id',$id)->select('value')->get();
    }
    public function setupRank($id){
        if(!empty($id)){
            $allPrice = order::where('user_id',$id)->select('total')->get();
            $idRank = user::where('id',$id)->select('rank_id')->get();
            
            if(!empty($allPrice)){
                $price = 0;
                //var_dump($price);
                foreach($allPrice as $key){
                    $price = (int)$price + (int)$key->total;
                }
                if($price > 0 && $price <50000000){
                    $idRank = 2;
                }
                if($price > 50000000 && $price < 200000000){
                    $idRank = 3;
                }
                if($price > 200000000 && $price < 500000000){
                    $idRank = 4;
                }
            }
        }
        return $idRank;
    }
}
