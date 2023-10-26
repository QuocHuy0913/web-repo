@extends('client.layouts.master')
@section('content')
    <div class="container" style="max-width: 1270px">
        <div class="path" style="margin-left: 10%">
            <a href="{{route('home')}}" style="margin-right: 20px; color: grey">Home</a>
            <i class="fas fa-angle-right"></i>
            <a href="{{route('getUserProfile')}}" style="margin: 0 20px 0 20px; color: grey">User Profile</a>
            <i class="fas fa-angle-right"></i>
            <a style="margin-left: 20px; color: darkgrey">{{$path}}</a>
        </div>
        <div class="row">
            <div class="center-content">
                <div class="user-icon">

                    <div class="user" style="border-bottom: 1px solid lightgrey; height: 32%">
                        <i class="fas fa-user-circle" style="font-size: 80px; color: white; margin: 25px 15px"></i>
                        <h4 style="font-weight: bold; color: white;">{{Auth::user()->name}}</h4>
                    </div>

                    <div class="menu">

                        <div class="option">
                            <span id="icon" class="material-symbols-outlined">
                                person
                            </span>
                            <a href="{{route('getUserProfile')}}">Account Detail</a>
                        </div>

                        <div class="option">
                            <span id="icon" class="material-symbols-outlined">
                                shopping_cart
                            </span>
                            <a href="{{route('getUserOrder')}}">Order</a>
                        </div>

                        <div class="option">
                            <span id="icon" class="material-symbols-outlined">
                                manage_accounts
                            </span>
                            <a href="{{route('changePassword')}}">Change Password</a>
                        </div>

                        <form id="option-logout" action="{{route('logout')}}" method="POST" style="margin-bottom: 0">
                            <div class="option">
                                <span id="icon" class="material-symbols-outlined">
                                    logout
                                </span>
                                <a href="#" id="submit-form">Logout</a>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="info">
                    @yield('profile-content')
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('submit-form').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('option-logout').submit();
        });
    </script>
@endsection
<style>
    .path {
        margin: 10px;
    }

    .row {
        display: flex;
        justify-content: center;
    }

    .center-content {
        width: 85%;
        text-align: center;
        align-content: center;
        background: white;
        border-radius: 15px;
        box-shadow: 0px 5px 10px 5px lightgrey;
    }

    .user-icon {
        background: linear-gradient(to bottom left, #cc3300 32%, #ff0000 100%);
        width: 30%;
        height: 100%;
        float: left;
        margin-left: auto;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    .user-icon .menu {
        float: left;
        text-align: left;
        width: 100%;
        height: 428px;
        position: relative;
    }

    .menu .option {
        float: left;
        width: 100%;
        height: 15%;
        display: flex;
        align-items: center;
    }

    #logout-form {
        float: left;
        width: 100%;
        display: flex;
        align-items: center;
        margin: 0;
    }

    #icon {
        margin: 20px 15px 20px 25px;
        font-size: 32px;
        color: white;
    }

    .option:hover #icon {
        color: black;
    }

    .option a {
        margin: 10px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        align-items: center;
        justify-content: center;
    }

    .option:hover a {
        color: black;
    }

    .option:hover {
        background: #ffcc99;
        transition: 0.5s;
    }

    .info {
        float: left;
        margin: 10px 0 10px 20px;
        width: 67%;
    }
</style>

