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
            position: sticky;
            z-index: 99999;
            width: 100%;
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
    </style>
    <div>
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
                                        <a href="https://minimog.thememove.com/megastore/" rel="home">
                                        <img src="{{asset('images/logo.png')}}">
                                        </a>
                                    </div>
                                </div>
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
                                                            <span class="menu-item-title">Blog</span>
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-content">
            @yield('content')
        </div>
    </div>
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
</body>

</html>
