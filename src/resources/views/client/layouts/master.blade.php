<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset ('admins')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset ('admins')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{asset('admins')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <style>
        body {
            min-height: 1000px;
            font-weight: 400;
            font-size: 16px;
            line-height: 1;
            background-color: #F7F7F7;
            margin: 0;
            font-family: Nunito;
            overflow: visible;
        }
        #page-header {
	        transition: all .4s ease!important;
        }
        a:hover {
            text-decoration: none;
        }
        h1 {
            font-size: 2rem;
        }
        #page-top-bar {
            min-height: 40px;
            background-color: #B82121;
            font-weight: 700;
            font-size: 16px;
            line-height: 26px;
            color: #ffffff;
        }
        .top-bar-wrap {
            padding: 7px 0 2px;
            min-height: 40px;
        }
        .top-bar-column-wrap {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-left: -15px;
            margin-right: -15px;

        }
        .top-bar-text {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .top-bar-tag {
            position: relative;
            display: inline-block;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            border-radius: 25px;
            color: black;
            background: #fff;
            padding: 0 8px;
            min-width: 54px;
            margin: 0 9px 0 0;
            text-align: center;
        }
        #page-header {
            width: 100%;
            z-index: 99999999;
        }
        .page-header-wrap {
            background-color: #fff;
            border-bottom: 0 solid transparent;
            width: 100%;
        }
        .header-wrap {
            padding: 19px 0 15px;
            display: flex;
            align-items: center;
        }
        .header-content-inner {
            display: flex;
            margin: 0 ;
            align-items: center;
        }
        .header-below {
            border-top: 1px solid #eee;
            border-right: 0 solid #eee;
            border-bottom: 1px solid #eee;
            border-left: 0 solid #eee;
        }
        .header-below-wrap {
            display: flex;
            align-items: center;
        }
        .header-below-left {
            flex: 1 1 0px;
        }
        .header-content-inner {
            display: flex;
            align-items: center;
            margin: 0 0;
        }
        .header-categories-nav {
            height: 100%;
            width: 100%;
            position: relative;
        }
        .header-categories-nav>.inner {
            position: relative;
            width: 300px;
        }
        .header-categories-nav .nav-toggle-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            min-height: 50px;
            color: #000;
            background-color: #fff;
            border-right: 1px solid #eee;
            font-weight: 900;
            font-size: 16px;
            line-height: 22px;
            text-transform: uppercase;
            transition: 0.25s ease;

        }
        .header-categories-nav:hover .nav-toggle-btn {
            background: #000;
            color: #fff;
        }
        .header-categories-nav:hover .category-menu {
            display: block;
        }
        .header-below-center {
            flex-grow: 1;
        }
        .page-nav .menu {
            text-align: center;
            line-height: 0;
        }
        .page-nav .menu .menu-wrap {
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: left;
            line-height: normal;
            direction: ltr;
        }
        .page-nav .menu .menu-wrap .menu-item {
            display: inline-block;
            vertical-align: top;
            position: relative;
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: left;
            line-height: normal;
            direction: ltr;
            padding: 16px 40px;
        }
        .rm-rf {
            font-weight: 900;
            font-size: 14px;
            line-height: 22px;
            text-transform: uppercase;
            text-decoration: none;
            color: black;
        }
        .rm-rf:hover {
            color: black;
            text-decoration: none;
        }
        .menu-wrap .menu-item .menu-item-wrap {
            display: flex;
            align-items: center;
        }
        .header-below-right {
            flex: 1 1 0px;
        }
        a.underline-hover-effect {
            text-decoration: none;
        }

        .underline-hover-effect {
            display: inline-block;
            position: relative;
        }

        .underline-hover-effect::before {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            width: 0;
            height: 2.5px;
            background-color: #000;
            transition: width 0.25s ease-out;
        }
        .underline-hover-effect:hover::before {
            width: 100%;
            left: 0;
            right: auto;
        }
        .menu-item-title {
            font-size:16px;
        }
        .search_wrap{
            width: 500px;
        }

        .search_wrap .search_box{
            position: relative;
            width: 500px;
            height: 44px;
        }

        .search_wrap .search_box .input{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 10px 20px;
            font-size: 16px;
            padding-right: 80px;
            border: 1px solid #bbb;
            font-weight: 700;
        }
        .search_wrap .search_box .input:focus-visible
        {
            outline: none;
        }

        .search_wrap .search_box .btn{
            position: absolute;
            top: 0;
            right: 0;
            width: 44px;
            height: 100%;
            background: black;
            z-index: 1;
            cursor: pointer;
        }

        .search_wrap .search_box .btn.btn_common .fas{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: #fff;
            font-size: 20px;
        }

        .search_wrap.search_wrap_1 .search_box .btn {
            border-radius: 0;

        }
        .icon {
            height: 24px;
        }
        .icon-wrap {
            padding: 0 16px;
            position: relative;
        }
        .material-symbols-outlined {
            color: black
        }
        .tooltiptext {
            visibility: hidden;
            width: 80px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 85%;
            margin-left: -60px;
            opacity: 0;
            transition:opacity 0.5s ease , transform 0.5s;
        }

        .tooltiptext::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent black transparent;
        }
        .icon:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
            transform: translateY(60%);
        }
        .icon:hover .material-symbols-outlined{
            opacity: 0.5;
        }
        .icon-amount-favorite {
            font-weight: 700;
            top: -8px;
            right: -1px;
            position: absolute;
            padding: 0 3px;
            min-width: 22px;
            height: 22px;
            border-radius: 22px;
            line-height: 22px;
            color: #fff;
            background: #B82121;
            font-weight: 700;
            font-size: 12px;
            text-align: center;
            z-index: 3;
        }
        #icon-amount-orders {
            font-weight: 700;
            top: -8px;
            right: 0px;
            position: absolute;
            padding: 0 3px;
            min-width: 22px;
            height: 22px;
            border-radius: 22px;
            line-height: 22px;
            color: #fff;
            background: #B82121;
            font-weight: 700;
            font-size: 12px;
            text-align: center;
            z-index: 3;
        }
        .category-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            width: 100%;
            z-index: 9;
        }
        .category-menu-list {
            list-style-type: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            margin: 0;
            padding: 16px;
            background: #fff;
            border: 1px solid #eee;
            min-width: 220px;
            width: 100%;
        }
        .category-menu-item {
            width: 100%;
        }
        .cmi-link{
            z-index: 0;
            position: relative;
            display: block;
            padding: 9px 12px;
            line-height: 24px;
            color: #000;
            transition: 0.25s ease;
        }
        .cmi-link:hover {
            color: #fff;
            background-color: #000;
        }
        .cmi-wrap{
            position: relative;
            display: flex;
            align-items: center;
        }
        #login {
        width: fit-content;
        top: 36%;
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        backdrop-filter: blur(10px);
        transition: all cubic-bezier(0.215, 0.610, 0.355, 1) 0.5s;
        transition-delay: 0s, 0s, 0.3s;
        }
        .login-trigger {
        font-weight: bold;
        color: #fff;
        background: linear-gradient(to bottom right, #B05574, #F87E7B);
        padding: 15px 30px;
        border-radius: 30px;
        position: relative;

        }

        .login-form-body {
        position: relative;
        padding:
        }
        * {
            box-sizing: border-box;
        }
        .title-login-form {
            font-weight: bold;
            margin: 0;
        }
        .guide-login-form {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }
        .subtitle-login-forn {
            font-size: 12px;
        }
        .forgot-pass-link,
        .social {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }
        .btn-login-form {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }
        .btn-login-form:active {
            transform: scale(0.95);
        }

        .btn-login-form:focus-visible,
        {
            outline: none;
        }
        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }
        .form-login,
        .form-sign-in
        {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }
        .inp-login-form {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }
        .inp-login-form:focus-visible {
            outline: none;
        }
        .container-login-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25),
                    0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }
        .form-container-wrap {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container-login-form.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container-login-form.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container-login-form.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }

        .overlay {
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, #FF4B2B, #FF416C);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container-login-form.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container-login-form.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container-login-form.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
        #change-info-order {
            width:40%;
            height:30%;
            background: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            display: none;
            padding: 20px;
            border-radius: 4px;
        }
    </style>
    <div style="position: sticky">
        <div id="page-top-bar">
            <div class="container" style="max-width: 1270px;">
                <div class="top-bar-wrap">
                    <div class="top-bar-section">
                        <div id="row">
                            <div class="col-md-6 top-bar-left">
                                <div class="top-bar-column-wrap">
                                    <div class="top-bar-text">
                                        <span class="top-bar-tag" style="font-size: 12px">HOT</span>
                                        <span>✌🏼 Free Express Shipping on orders $200!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="page-header">
            <div class="page-header-wrap">
                <div class="container" style="max-width: 1270px;">
                    <div class="header-wrap">
                        <div class="header-left header-col-start" style="flex: 1 1 0px;">
                            <div class="header-content-inner">
                                <div class="branding" style="padding: 8px 0 8px;">
                                    <div class="branding__logo">
                                        <a href="{{route('home')}}" rel="home">
                                        <img src="{{asset('images/logo.png')}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-center " style="flex-shrink: 0;">
                            <div class="header-content-inner">
                                <div class="header-search-form">
                                    <div class="search_wrap search_wrap_1">
                                        <div class="search_box">
                                            <input type="text" class="input" placeholder="Search something...">
                                            <button class="btn btn_common">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-right" style="flex: 1 1 0px;">
                            <div class="header-content-inner" style=" justify-content:flex-end">
                                @if (!Auth::user())
                                    <a href="javascript:" class="icon-wrap " id="init-login-form-1">
                                        <div class="icon">
                                            <span class="material-symbols-outlined">
                                            person
                                            </span>
                                            <span class="tooltiptext">Login</span>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{route('getUserProfile')}}" class="icon-wrap">
                                        <div class="icon">
                                            <span class="material-symbols-outlined">
                                            person
                                            </span>
                                            <span class="tooltiptext">Account</span>
                                        </div>
                                    </a>
                                @endif
                                <a href="" class="icon-wrap">
                                    <div class="icon">
                                        <span class="material-symbols-outlined">
                                            favorite
                                        </span>
                                        <span class="icon-amount-favorite">0</span>
                                        <span class="tooltiptext">Wishlist</span>
                                    </div>
                                 </a>
                                 @if (Auth::user())
                                    <a href="{{route('cart')}}" class="icon-wrap">
                                        <div class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                            @if (!empty(Session::has('Cart')))
                                                <span id="icon-amount-orders">{{Session::get('Cart')->totalQuantity}}</span>
                                            @else
                                                <span id="icon-amount-orders">0</span>
                                            @endif
                                            <span class="tooltiptext">Cart</span>
                                        </div>
                                    </a>
                                 @else
                                    <a href="#" class="icon-wrap" id="init-login-form-2">
                                        <div class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                            @if (!empty(Session::has('Cart')))
                                                <span id="icon-amount-orders">{{Session::get('Cart')->totalQuantity}}</span>
                                            @else
                                                <span id="icon-amount-orders">0</span>
                                            @endif
                                            <span class="tooltiptext">Cart</span>
                                        </div>
                                    </a>
                                 @endif
                            </div>
                        </div>
                    </div>

                </div>
                <div class="header-below">
                    <div class="container" style="max-width: 1270px;">
                        <div class="header-below-wrap">
                            <div class="header-below-left">
                                <div class="header-content-inner">
                                    <div class="header-categories-nav">
                                        <div class="inner">
                                            <span class="nav-toggle-btn">
                                                Shop By Categories
                                            </span>
                                            <nav class="category-menu">
                                                <ul class="category-menu-list">
                                                    <li class="category-menu-item">
                                                        <a href="" class="cmi-link">
                                                            <div class="cmi-wrap">
                                                                <span class="cmi-content">
                                                                    Phone
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="category-menu-item">
                                                        <a href="" class="cmi-link">
                                                            <div class="cmi-wrap">
                                                                <span class="cmi-content">
                                                                    Laptop
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="category-menu-item">
                                                        <a href="" class="cmi-link">
                                                            <div class="cmi-wrap">
                                                                <span class="cmi-content">
                                                                    Watch
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-below-center">
                                <div class="header-content-inner" style="justify-content: center;">
                                    <div class="page-nav">
                                        <div class="menu">
                                            <ul class="menu-wrap">
                                                <li class="menu-item">
                                                    <a href="{{route('home')}}" class="rm-rf underline-hover-effect">
                                                        <div class="menu-item-wrap">
                                                            <span class="menu-item-title">Home</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('shop')}}" class="rm-rf underline-hover-effect">
                                                        <div class="menu-item-wrap">
                                                            <span class="menu-item-title">Shop</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('blog')}}" class="rm-rf underline-hover-effect">
                                                        <div class="menu-item-wrap">
                                                            <span class="menu-item-title">About</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('more')}}" class="rm-rf underline-hover-effect">
                                                        <div class="menu-item-wrap">
                                                            <span class="menu-item-title">More</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-below-right">
                                <div class="header-content-inner">
                                    @if(Auth::user())
                                        <span style="margin-right:20px">Hello {{Auth::user()->name}} !</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-content" style ="margin-top: 12px">
            @yield('content')
        </div>
    </div>
    <div id="sontran" style=" display:none ;position: absolute;top: 0;left: 0;bottom: 0;right: 0;background: #000; opacity: 0.5;">
    </div>
    @if (!Auth::user())
        <div id="login" class="login-form" role="dialog">
            <div class="login-form-dialog">
                <div class="login-form-content">
                    <div class="login-form-body">
                        <div class="container-login-form" id="container-id">
                            <div class="form-container-wrap sign-up-container">
                                <form action="{{route('register')}}" class="form-login" method="POST">
                                    <h1 class="title-login-form">Create Account</h1>
                                    <div class="social-container">
                                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <span class="subtitle-login-forn">or use your email for registration</span>
                                    <input type="text" placeholder="Name"  class="inp-login-form" name="name"/>
                                    <input type="email" placeholder="Email" class="inp-login-form" name="email"/>
                                    <input type="password" placeholder="Password" class="inp-login-form" name="password"/>
                                    <input type="password" placeholder="Confirm Password" class="inp-login-form" name="password_confirmation"/>
                                    <button class="btn-login-form" type="submit">Sign Up</button>
                                    @csrf
                                </form>
                            </div>
                            <div class="form-container-wrap sign-in-container">
                                <form action="{{route('login')}}" class="form-sign-in" method="POST">
                                    <h1 class="title-login-form">Sign in</h1>
                                    <div class="social-container">
                                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <span class="subtitle-login-forn">or use your account</span>
                                    <input type="email" placeholder="Email" class="inp-login-form" name="email"/>
                                    <input type="password" placeholder="Password" class="inp-login-form" name="password"/>
                                    <a class="forgot-pass-link" href="#">Forgot your password?</a>
                                    <button class="btn-login-form" type="submit">Sign In</button>
                                    @csrf
                                </form>
                            </div>
                            <div class="overlay-container">
                                <div class="overlay">
                                    <div class="overlay-panel overlay-left">
                                        <h1 class="title-login-form">Welcome Back!</h1>
                                        <p class="guide-login-form">To keep connected with us please login with your personal info</p>
                                        <button class="ghost btn-login-form" id="signIn">Sign In</button>
                                    </div>
                                    <div class="overlay-panel overlay-right">
                                        <h1 class="title-login-form">Hello, Friend!</h1>
                                        <p class="guide-login-form">Enter your personal details and start journey with us</p>
                                        <button class="ghost btn-login-form" id="signUp">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
            {{-- <div id="change-info-order">
                <h4>Change Information Order</h4>
                <form action="{{route('changeInfo')}}" method="POST">
                    <div class="mb-3">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control w-50" placeholder="Your Phone..." autocomplete="off" value="{{old('phone')}}">
                        @error('phone')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control w-50" placeholder="Your Adress..." autocomplete="off" value="{{old('address')}}">
                        @error('address')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div> --}}
    @endif

    <script src="https://kit.fontawesome.com/f9275dded9.js" crossorigin="anonymous"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container-id');
        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });

        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("page-header").style.position = "sticky";

            document.getElementById("page-header").style.top = "0";
          } else {
            document.getElementById("page-header").style.position = "";
            document.getElementById("page-header").style.top = "-133.6px"; /* adjust this value to the height of your header */
          }
          prevScrollpos = currentScrollPos;
        }

        const btnLoginForm1 = document.querySelector("#init-login-form-1");
        btnLoginForm1.addEventListener("click", () => {
            console.log(1);
            let loginForm = document.getElementById("login");
            let sontran = document.getElementById("sontran");

                loginForm.style.display = "block";
                loginForm.style.top = window.scrollY + window.innerHeight / 2 + "px";
                document.body.style.overflow = "hidden";
                sontran.style.display = "block";
                document.body.style.paddingRight = "17px";
                document.addEventListener("click", (e) => {
                    if (!loginForm.contains(e.target) && !btnLoginForm1.contains(e.target)) {
                        loginForm.style.display = "none";
                        loginForm.style.top = "36%";
                        document.body.style.overflow = "visible";
                        document.body.style.paddingRight = "17px";
                        sontran.style.display = "none";
                    }
                });
        });
        // btnLoginForm2.addEventListener("click", (event) => {
        //     event.preventDefault();
        //     console.log(2);
        //     btnLoginForm1.click();
        // })


    </script>
    <script src="{{asset('admins')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('admins')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admins')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admins')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admins')}}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admins')}}/js/demo/chart-area-demo.js"></script>
    <script src="{{asset('admins')}}/js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
</body>

</html>
