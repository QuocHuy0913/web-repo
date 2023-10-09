@extends('client.layouts.master')
@section('content')
    <style>
        :root {
	        --primary-color: #4daf54;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .card {
            margin: 40px auto;
            height: 400px;
            background:#fff;
            padding: 40px 20px;
            color: #000;
            position: relative;
            border-radius:6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }

        .card__img {
            width: 90%;
            transition: 0.5s;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .card:hover .card__img {
            transform: translateY(-90px);
        }

        .card__title {
            color: black;
            transition: 0.5s;
            text-align: center;
            font-size: 20px;
        }

        .card__price {
            font-weight: 600;
            font-size: 28px;
            transition: 0.5s;
            text-align: center;
            margin: 8px 0 0px;
        }

        .card:hover .card__title {
            transform: translate(-32px, -72px);
        }

        .card:hover .card__price {
            transform: translate(-92px, -60px);
        }

        .card__size,
        .card__color,
        .card__action {
            opacity: 0;
            visibility: hidden;
            transition: 0.5s;
            font-size: 16px;
        }

        .card__size {
            margin-top: 100px;
        }

        .card:hover .card__size {
            margin-top: -30px;
        }

        .card:hover .card__size,
        .card:hover .card__color,
        .card:hover .card__action {
            transition-delay: 0.1s;
            opacity: 1;
            visibility: visible;
        }

        .card__size,
        .card__color {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .card__size h3,
        .card__color h3 {
            font-weight: unset;
            margin-right: 12px;
        }

        .card__size span {
            padding: 2px 10px;
            background-color: #dadada;
            margin: 0 5px;
            border-radius: 5px;
            color: #272d40;
            cursor: pointer;
        }

        .card__color span {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }


        .card__action button {
            padding: 10px 16px;
            outline: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            margin-right: 7px;
            font-weight: 600;
            transition: 0.25s;
        }

        .card__action button:hover {
            transform: scale(0.9);
        }


        .like, .cart {
            font-size: 25px;
            position: absolute;
            top: 12px;
            left: 20px;
            cursor: pointer;
            z-index: 2;
        }
        .card__color span.green {
	        background-color: green;
        }
        .card__color span.red {
            background-color: red;
        }
        .card__color span.black {
            background-color: black;
        }

        .cart {
            left: unset;
            right: 20px;
        }
        .buy-now {
            background-color: #f52f32;
        }
        .add-cart {
            background-color: var(--primary-color);
        }
        .filter {
            background: #fff;
            border: 1px solid #eee;
            margin-top: 40px;
            width: 30%;
            max-height: 1000px;
        }
    </style>
    <div class="container" style="max-width: 1270px">
            {{-- <div class="filter">
            </div> --}}
            <div class="shell" >
                <div class="container">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <span class="like"><i class='bx bx-heart'></i></span>
                                <span class="cart"><i class='bx bx-cart-alt' ></i></span>
                                <div class="card__img">
                                    <img src="{{asset('images/iphone-15.png')}}" alt="" />
                                </div>
                                <h2 class="card__title">iPhone 15 ProMax</h2>
                                <p class="card__price">$99</p>
                                <div class="card__size">
                                    <h3 style="font-size: 16px; margin : 0 12px 0 0">Storage:</h3>
                                    <span>512GB</span>
                                    <span>1TB</span>
                                </div>
                                <div class="card__color">
                                    <h3 style="font-size: 16px;margin : 0 12px 0 0">Color:</h3>
                                    <span class="green"></span>
                                    <span class="red"></span>
                                    <span class="black"></span>
                                </div>
                                <div class="card__action">
                                    <button class="buy-now" style="font-size: 16px;">Buy now</button>
                                    <button class="add-cart" style="font-size: 16px;">Add cart</button>
                                </div>
                            </div>
                        </div>
                        


                    </div>
                </div>
            </div>
    </div>


@endsection
