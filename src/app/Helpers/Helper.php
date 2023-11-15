<?php
use App\Models\Brand;
use App\Models\Category;
use App\Models\Discount;
use App\Models\User;
use App\Models\Rank;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Status;
use App\Models\Favorite;
function getAllCategory(){
    $categories = Category::all();
    return $categories;
}
function getAllBrand(){
    $brands = Brand::all();
    return $brands;
}
function getDiscountPrice($id){
    if($id == null){
        return 0;
    }
    if(!empty($id)){
        $data = new Discount();
        $price = $data->getPrice($id);
        foreach($price as $key){
            $item = $key->price;
        }
        return $item;
    }
    return 0;
}
function getDiscount(){
    $title = "Empty discount";
    $list = Discount::all();
    return $list;  
}
function getDiscountUser($id){
    $list = Discount::where('rank_id', $id)->get();
    return $list;
}
function getDiscountName($id){
    if(!empty($id)){
        $data = new Discount();
        $name = $data->getName($id);
        foreach($name as $key){
            $item = $key->name;
        }
        return $item;
    }
    return 0;
}
function getNameUser($id){
    if(!empty($id)){
        $name[] = User::find($id)->first();
        foreach($name as $key){
            $item = $key['name'];
        }
        return $item;
    }
    return 0;
}
function displayStatus($status){
    if($status==1){
        return 'Chờ xác nhận';
    }
    else if($status == 2) {
        return 'Hủy';
    } else if($status == 3) {
        return 'Đang chuẩn bị hàng';
    } else if($status == 4) {
        return 'Đang giao hàng';
    } else {
        return 'Đã giao hàng';
    }
}
function displayClassStatusOrder($status) {
    if($status==1){
        return 'secondary';
    }
    else if($status == 2) {
        return 'danger';
    } else if($status == 3) {
        return 'warning';
    } else if($status == 4) {
        return 'info';
    } else{
        return 'success';
    }
}
function getStatus($id){
    if(!empty($id)){
        $status[] = Status::find($id)->first();
        foreach($status as $key){
            $item = $key['status'];
        }
        return $item;
    }
    return 0;
}
function getImageProduct($id){
    if(!empty($id)){
        $product[] = Product::find($id)->first();
        foreach($product as $key){
            $item = $key['images'];
        }
        return $item;
    }
    return 0;
}
function getNameProduct($id){
    if(!empty($id)){
        $product[] = Product::find($id)->first();
        foreach($product as $key){
            $item = $key['name'];
        }
        return $item;
    }
    return 0;
}
function getColor($id){
    if(!empty($id)){
        $product[] = Product::find($id)->first();
        foreach($product as $key){
            $item = $key['color'];
        }
        return $item;
    }
    return 0;
}
function getStorage($id){
    if(!empty($id)){
        $product[] = Product::find($id)->first();
        foreach($product as $key){
            $item = $key['storage'];
        }
        return $item;
    }
    return 0;
}
function getDiscountTotal($id){
    if(empty($id)){
        return 0;
    }
    $order = new Order();
    $data[] = Order::find($id)->first();
        foreach($data as $key){
            $item = $key['total'];
        }
    return $item;
}
function getPriceRank($id, $total,$voucher){
    $totalDiscount = laygiatienbandauDetail($id);
    $valueVoucher = getDiscountPrice($voucher);
    $priceRank = $totalDiscount - ($total+$valueVoucher);
    return $priceRank;
}
function laygiatienbandauDetail($id){
    $orderDetail = new OrderDetail();
    $data = $orderDetail->getTotal($id);
    $tong = 0 ;
    foreach($data as $key){ 
                $item = $key->price;
                $tong += $item;
            }
    return $tong;
}
 function getOrderConfirm($id,$status){
    if($status==1){
        $orderdetail = new OrderDetail();
        $list = $orderdetail->getlist($id);
        return $list;
    }
    return null;
}
function getOrderShipped($id,$status){
    if($status==3){
        $orderdetail = new OrderDetail();
        $list = $orderdetail->getlist($id);
        return $list;
    }
    return null;
}
function getOrderOntheway($id,$status){
    if($status==4){
        $orderdetail = new OrderDetail();
        $list = $orderdetail->getlist($id);
        return $list;
    }
    return null;
}
function getOrderDelivered($id,$status){
    if($status==5){
        $orderdetail = new OrderDetail();
        $list = $orderdetail->getlist($id);
        return $list;
    }
    return null;
}
function getOrdered($id,$status){
    if($status==2){
        $orderdetail = new OrderDetail();
        $list = $orderdetail->getlist($id);
        return $list;
    }
    return null;
}
function changeColorOrder($id){
    if($id == 1){
        $data = [
            "confirm" => "orangered",
            "shipped" => "darkgray",
            "ontheway" => "darkgray",
            "delivered" => "darkgray"
        ];
        return $data;
    }else if($id == 3){
        $data = [
            "confirm" => "darkgray",
            "shipped" => "orangered",
            "ontheway" => "darkgray",
            "delivered" => "darkgray"
        ];
        return $data;
    }else if($id == 4){
        $data = array(
            "confirm" => "darkgray",
            "shipped" => "darkgray",
            "ontheway" => "orangered",
            "delivered" => "darkgray"
        );
        return $data;
    }else if($id == 5){
        $data = [
            "confirm" => "darkgray",
            "shipped" => "darkgray",
            "ontheway" => "darkgray",
            "delivered" => "green"
        ];
        return $data;
    }else{
        $data = [
            "confirm" => "darkgray",
            "shipped" => "darkgray",
            "ontheway" => "darkgray",
            "delivered" => "darkgray"
        ];
        return $data;
    }
}
function nameUser($id){
    if(empty($id)){
        return 0;
    }
    $user = User::find($id);
    $name = $user->name;
    return $name;
}
function getProduct($data){
    if(empty($data)){
        return 0;
    }
    $product = Product::where('category_id',$data)->get();
    return $product;
}
function product($id){
    if(empty($id)){
    return 0;
    }
    $product = Product::find($id);
    return $product;
}
function countFavorites(){
    if(!empty(Auth()->user()->id)){
        $data = Favorite::where('user_id',Auth()->user()->id)->get();
        $data = $data->count();
        return $data;
    }
   return 0;
}
function categories(){
    $data = Category::all();
    return $data;
}
function homeCateProduct($data){
    $data = Product::where('category_id',$data)->orderBy( 'created_at','DESC' )->take(5)->get();
    return $data;
}