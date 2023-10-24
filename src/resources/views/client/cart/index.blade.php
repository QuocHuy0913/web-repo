@extends('client.layouts.master')
@section('content')
    <div class="container" style="max-width:1270px">
        @if (true)
        <div class="main-title">
            <h2>Shopping Cart</h2>
        </div>
        <form method="POST" action="">
            <div id="main-cart">

                    <div id="content-left">
                        @if (!empty(Session::has("Cart")))
                        <div class="content-left-head ">
                            <label for="" style="font-weight: inherit;margin-bottom: 0;">Tất cả sản phẩm</label>
                            <span class="ta-c">Đơn giá</span>
                            <span class="ta-c">Số lượng</span>
                            <span class="ta-c">Thành tiền</span>
                            <span><i class="fa-regular fa-trash-can fa-lg"></i></span>
                        </div>
                        <div class="content-left-main">
                        @foreach (Session::get("Cart")->products as $item)
                            <div class="test r-item" id="wrap-item-{{$item['productInfo']->id}}">
                                <div class="">
                                    <div class="product-info">
                                        <a href="" class="link-img">
                                            <div class="block-product-img">
                                                <img src="{{asset($item['productInfo']->images)}}" alt="" class="product-img">
                                            </div>
                                        </a>
                                        <div class="product-name">
                                            <h5>{{$item['productInfo']->name}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="ta-c">
                                    <span >{{$item['productInfo']->price_sell}}</span>
                                </div>
                                <div class="">
                                    <div class="qty-container">
                                        <button class="qty-btn-minus btn-light" type="button" onclick="decreaseItem({{$item['productInfo']->id}})"><i class="fa fa-minus"></i></button>
                                        <input type="text" name="qty" value="{{$item['quantity']}}" class="input-qty" id="item-cart-{{$item['productInfo']->id}}" max="{{$item['productInfo']->amount}}"/>
                                        <button class="qty-btn-plus btn-light" type="button" onclick="increaseItem({{$item['productInfo']->id}}, {{$item['productInfo']->amount}})"><i class="fa fa-plus" ></i></button>
                                    </div>
                                </div>
                                <div class="ta-c" id="item-price-{{$item['productInfo']->id}}">{{$item['price']}}</div>
                                <div class="" onclick="deleteItemListCart({{$item['productInfo']->id}})" style="cursor: pointer">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </div>
                            </div>
                        @endforeach

                        </div>
                        @else
                        <h4 style="width:fit-content; color:#d70018;">Cart is null</h4>
                        @endif
                    </div>


                <div id="content-right">
                    <div class="block-info-customer">
                        <div class="content-bic">
                            <div class="form-change-info"></div>
                            <div class="head-content">
                                <h3 class="hcb-title">Giao tới</h3>
                                <a href="javascript" onclick="changeInfo()" class="change-address">Thay đổi</a>
                            </div>
                            <div class="customer-info">
                                <input  name="name" type="text" class="customer-info-name form-control" placeholder="Enter name..." value="{{Auth::user()->name ?? old("name")}}" style="width: 180px;" /> 
                                @error('name')
                                    <span>{{$message}}</span>
                                @enderror               
                                <input id="phone-inp" name="phone" type="" class="customer-info-phone form-control" placeholder="Enter phone..." value="{{Auth::user()->phone ?? old("phone")}}" style="width: 180px;" />
                                @error('phone')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="address">
                                <input id="address-inp" name="address" type="text" class="customer-info-address form-control" placeholder="Enter address..." value="{{Auth::user()->address ?? old("address")}}" style="width: 180px;" />
                                @error('address')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="block-voucher">
                        <div class="content-bv">
                            <div class="head-content">
                                <h3 class="hcb-title" style="color: rgb(36, 36, 36);">Shop khuyến mãi</h3>
                                <h4 class="hcb-title" style="font-size: 14px">Tối đa chọn 1</h4>
                            </div>
                            <div class="head-content">
                                <input type="text" name="" id="" placeholder="Nhập mã khuyến mãi..." class="form-control" style="width: 180px;">
                                <a  class="btn btn-primary">Nhập</a>
                            </div>
                        </div>
                    </div>
                    <div class="block-checkout">
                        <ul class="price-items">
                            <li class="price-item">
                                <span class="price-text">Tạm tính</span>
                                <span class="price-value" id ="pre-total-price">{{Session::get('Cart') ? Session::get('Cart')->totalPrice : 0}}</span>
                            </li>
                            <li class="price-item">
                                <span class="price-text">Giảm giá</span>
                                <span class="price-value">-500.000 đ</span>
                            </li>
                        </ul>
                        <div class="price-total">
                            <span class="price-text">Tổng tiền</span>
                            <div style="text-align:right">
                                <span id="price-total-value">{{Session::get('Cart') ? Session::get('Cart')->totalPrice : 0}}</span>
                                <span class="notice-vat">(Đã bao gồm VAT nếu có)</span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-checkout">Checkout</button>
                </div>
            </div>
            @csrf
        </form>
    
    @else
        <h1>Hãy đăng nhập</h1>
    @endif
    </div>

    <script>
        function renderListCart(response, id){
            $("#item-cart-"+id).val(`${response[0].quantity}`);
            $("#item-price-"+id).text(response[0].price);
            $("#icon-amount-orders").text(response[1]);
            $("#price-total-value").text(response[2]);
            $("#pre-total-price").text(response[2]);
        }
        function decreaseItem(id) {
            var $n =  $("#item-cart-"+id)
            var amount = Number($n.val());
            if(amount > 1) {
                $n.val(amount-1);
                $.ajax({
                    url:'updateItemListCart/' +id+ '/' +$("#item-cart-"+id).val() ,
                    type:'GET',
                }).done(function(response){
                    renderListCart(response, id);
                });
            }

        }
        function increaseItem(id, amount){
            var $n = $("#item-cart-"+id);
            console.log(amount);
            if($n.val() < amount) {
                $n.val(Number($n.val())+1);
                $.ajax({
                    url:'updateItemListCart/' +id+ '/' +$("#item-cart-"+id).val() ,
                    type:'GET',
                }).done(function(response){
                    renderListCart(response, id);
                });
            }
        }

        function deleteItemListCart(id) {
            $.ajax({
                url:'deleteItemListCart/'+id,
                type:'GET',
            }).done(function(response){
                if(response == 0){
                    $("#content-left").html(`<h4 style="width:fit-content; color:#d70018;">Cart is null</h4>`);
                    $("#icon-amount-orders").text("0");
                    $("#price-total-value").text("0");
                    $("#pre-total-price").text("0");
                } else {
                    $("#wrap-item-"+id).remove();
                    $("#icon-amount-orders").text(response[0]);
                    $("#price-total-value").text(response[1]);
                    $("#pre-total-price").text(response[1]);
                }
                Swal.fire(
                    'Item of cart was deleted successful',
                    'You clicked the button!',
                    'success'
                    )
            });
        }

       
        // function deleteAll(){
        //     $.ajax({
        //         url:'cart/checkOut',
        //         type:'GET',
        //     }).done(function(respone){
        //         renderListCart(respone);
        //         Swal.fire(
        //             'Bạn đã đặt hàng thành công',
        //             'You clicked the button!',
        //             'success'
        //             )
        //     });
        // }

    </script>
@endsection
<style>
    .test {
        display: grid;
        grid-template-columns: 358px 150px 120px 150px 30px;
        align-items: center;
    }
    #main-cart {
        display: flex;
        flex-wrap: nowrap;
        -webkit-box-pack: justify;
        justify-content: space-between;


    }
    .main-title {
        margin: 20px 0px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }
    .main-title h4 {
        font-size: 20px;
        font-weight: 500;
        margin: 0px;
        color: rgb(0, 0, 0);
        line-height: 28px;
        text-transform: uppercase;
        flex-basis: calc(797px);
    }
    #content-left{
        flex: 1 1 1200px;
    }
    #content-right {
        flex: 1 1 calc(100% - 1200px);
        margin-left: 20px;
        display: block;
    }
    .content-left-head {
        background: rgb(255, 255, 255);
        padding: 9px 16px;
        border-radius: 4px;
        color: rgb(36, 36, 36);
        font-weight: 400;
        font-size: 13px;
        margin-bottom: 12px;
        top: 105px;
        z-index: 99;
        display: grid;
        grid-template-columns: 358px 150px 120px 150px 30px;
        -webkit-box-align: center;
        align-items: center;
    }
    .r-item {
        margin-left: 0px;
        align-items: center;
        margin-bottom: 12px;
        background-color: white;
        padding: 12px 16px;
        width: 100%;

    }
    .ta-c {
        text-align: center;
    }


    .product-info {
        display: flex;
        align-items: center;
    }
    .link-img {
        width: 25%;

    }
    .block-product-img {
        padding: 4px;

    }
    .product-img {
        width: 100%;
    }
    .product-name {
        margin-left: 20px;
    }
    .block-info-customer {
        background: white;
        border-radius: 4px;

    }
    .content-bic {
        border-radius: 4px;
        margin-bottom: 12px;
        padding: 16px;
        font-size: 14px;
        line-height: 20px;
    }
    .head-content {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin-bottom: 12px;
    }
    .customer-info {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(56, 56, 61);
        margin-bottom: 2px;
        font-weight: 600;
    }
    .address {
        color: rgb(128, 128, 137);
        font-weight: normal;
    }
    .hcb-title {
        color: rgb(128, 128, 137);
        font-weight: normal;
        margin: 0px;
        font-size: 16px;
        line-height: 20px;
    }
    a.change-address:hover {
        text-decoration: none;
    }
    p.customer-info-name {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        margin: 0px;
    }
    p.customer-info-phone {
        margin: 0px;
        flex-shrink: 0;
    }
    .customer-info i {
        display: block;
        width: 1px;
        height: 20px;
        background-color: rgb(235, 235, 240);
        margin: 0px 8px;
    }
    .block-voucher {
        background-color: white;
        border-radius: 4px;
    }
    .content-bv {
        border-radius: 4px;
        margin-bottom: 12px;
        padding: 16px;
        font-size: 14px;
        line-height: 20px;
    }
    .block-checkout {
        background: rgb(255, 255, 255);
        border-radius: 4px;
        padding-bottom: 8px;
    }
    .price-items {
        list-style: none;
        margin: 0px;
        padding: 17px 20px;
        border-bottom: 1px solid rgb(244, 244, 244);
    }
    .price-item {
        display: flex;
        flex-wrap: nowrap;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .price-text {
        font-weight: 300;
        color: rgb(51, 51, 51);
        display: inline-block;
    }
    .price-value {

    }
    .price-total {
        padding: 17px 20px;
        display: flex;
        flex-wrap: nowrap;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin: 0px;
    }
    #price-total-value {
        color: rgb(254, 56, 52);
        font-size: 22px;
        font-weight: 400;
        text-align: right;
    }
    .notice-vat {
        font-weight: 300;
        font-style: normal;
        display: block;
        font-size: 12px;
        color: rgb(51, 51, 51);
        margin-top: 3px;
    }
    .btn-checkout {
        background: rgb(255, 66, 78);
        color: rgb(255, 255, 255);
        padding: 13px 10px;
        text-align: center;
        border-radius: 4px;
        border: none;
        width: 100%;
        display: block;
        cursor: pointer;
        margin: 15px 0px 0px;
    }
    .btn-checkout:hover {
        text-decoration: none;
        opacity: 0.8;
        color: white;
    }
    .r-item .col-3 {
        display: flex;
        justify-content: center;
        align-items: center;
        user-select: none;
    }
    .minus, .plus {
        display: inline-block;
        width: 20px;
        height: 20px;
        background-color: #EA6A9E;
        color: #fff;
        text-align: center;
        cursor: pointer;
        }
    .num {
        padding: 0 10px;
    }
    .qty-container{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .qty-container .input-qty{
        text-align: center;
        padding: 6px 10px;
        border: 1px solid #d4d4d4;
        max-width: 40px;
        height: 21.6px;
    }
    .qty-container .qty-btn-minus,
    .qty-container .qty-btn-plus{
        border: 1px solid #d4d4d4;
        padding: 10px 13px;
        font-size: 10px;
        height: 20px;
        width: 20px;
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .qty-container .qty-btn-plus{
        margin-left: -1px;
    }
    .qty-container .qty-btn-minus{
        margin-right: -1px;
    }

</style>
