@extends('client.layouts.master')
@section('content')
<div class="row">
    <div class="center-content">
        <div class="intro" style="text-align: center">
            <div class="contact">
                <h2 style="font-weight: bold">About Us</h2>
                <div class="path">
                    <a href="{{route('home')}}">Home</a>
                    <i class="fas fa-angle-right"></i>
                    <a href="{{route('blog')}}">Blog</a>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="info" style="float: left">
                <span style="font-size: 50px; color:#0033FF; font-weight:bold">Get in touch <span style="color: black">with us</span></span>
                <p style=" text-align:left; margin-top:20px; line-height:1.5; color:black">Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form and we’ll get back to you.</p>
                <div class="info-contact" style="margin-top: 10%">
                    <div>
                        <span class="material-symbols-outlined">
                            home_pin
                        </span>
                    </div>
                    <div class="location">
                        <h4 style="font-weight: bold; color: black">Headquater</h4>
                        <p style="line-height: 1.5">10 National Highway 22, Tan Xuan commune, Hoc Mon district, Ho Chi Minh City</p>
                    </div>
                </div>

                <div class="info-contact" style="margin-top: 5%">
                    <div>
                        <span class="material-symbols-outlined">
                            support_agent
                        </span>
                    </div>
                    <div class="location">
                        <h4 style="font-weight: bold; color: black">Phone Number</h4>
                        <p style="margin-bottom: 10px">Mobile: 0913 456 789</p>
                        <p>Hot line: 1900 0000</p>
                    </div>
                </div>

                <div class="info-contact" style="margin-top: 5%">
                    <div>
                        <span class="material-symbols-outlined">
                            contact_mail
                        </span>
                    </div>
                    <div class="location">
                        <h4 style="font-weight: bold; color: black">Email Us</h4>
                        <p style="margin-bottom: 10px">Hello@gmail.com</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="img">
            <img style="width:100%" src="{{asset('images/ct2-pic.png')}}" alt="">
        </div>

        <div class="about-us">
            <div style="width: 20%; margin:30px; border-right: 1px solid white">
                <h1 style="color: white; font-weight:bold">TechStore</h1>
                <p style="margin-top: 20px; color:white; line-height:1.3">We provide leading mobile technology products, from mobile phones to accessories and repair services.</p>
                <a style="margin: 10px 0 10px 0px; color: white; font-size:24px" href="#" class="fa fa-facebook"></a>
                <a style="margin: 10px 0 10px 20px; color: white; font-size:24px" href="#" class="fa fa-twitter"></a>
                <a style="margin: 10px 0 10px 20px; color: white; font-size:24px" href="#" class="fa fa-instagram"></a>
                <a style="margin: 10px 0 10px 20px; color: white; font-size:24px" href="#" class="fa fa-pinterest"></a>
            </div>

            <div style="width:20%; margin:30px; color:white; border-right: 1px solid white">
                <h4 style="font-weight:bold; color:white">Get in touch</h4>
                <p style="line-height: 1.3; margin: 0 0 10px">10 National Highway 22, Tan Xuan commune, Hoc Mon district, Ho Chi Minh City</p>
                <p style="margin-bottom: 10px">Hello@gmail.com</p>
                <p style="margin-bottom: 10px">0913 456 789</p>
            </div>

            <div style="width:20%; margin:30px; color:white; border-right: 1px solid white">
                <h4 style="font-weight:bold; color:white">Offer Information</h4>
                <a href="#" style="color: white; font-weight:bold; margin-bottom:10px; display:block">Help center</a>
                <a href="#" style="color: white; font-weight:bold; margin-bottom:10px; display:block">Warranty service</a>
                <a href="#" style="color: white; font-weight:bold; margin-bottom:10px; display:block">Operation regulations</a>
            </div>

            <div style="width:20%; margin:30px; color:white">
                <h4 style="font-weight:bold; color:white">Information and policies</h4>
                <a href="#" style="color: white; font-weight:bold; margin-bottom:10px; display:block">Buy and pay online</a>
                <a href="#" style="color: white; font-weight:bold; margin-bottom:10px; display:block">Buy installment goods online</a>
                <a href="#" style="color: white; font-weight:bold; margin-bottom:10px; display:block">Delivery Policy</a>
                <a href="#" style="color: white; font-weight:bold; margin-bottom:10px; display:block">Look up warranty information</a>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .row {
        display: flex;
        justify-content: center;
    }

    .center-content {
        width: 90%;
        height: 100%;
        align-content: center;
        background: white;
        border-radius: 0 0 15px 15px;
        border: 1px solid lightgrey;
        box-shadow: 10px 0 10px -5px lightgray, 0 10px 10px -5px lightgray, -10px 0 10px -5px lightgray, 0 -10px 10px -5px white;
    }

    .intro {
        background-image: url('images/blog.jpg');
        background-size:cover;
        height: 200px;
        position: relative;
        display: block;
        background-position: center;
    }

    .info {
        top:8%;
        margin-left: 40px;
        width: 70%;
    }

    .contact {
        top: 50%;
        position: inherit;;
        left:50%;
        Transform: translate(-50%, -50%);
        font-weight: 600;
        color: black;
    }

    .path {
        margin-top: 20px;
    }

    .info span.material-symbols-outlined {
        color: transparent;
        display: inline-block;
        background-image: linear-gradient(to bottom, blueviolet 50%, blue);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        font-size: 40px;
    }
    .path a{
        font-size:large;
        color: gray;
        margin: 0 10px 0 10px
    }

    .blog-content {
        margin-top: 8%;
        display: inline-block;
        width: 50%;
    }

    .info-contact {
        display: flex;
    }

    .info-contact .location {
        margin-left: 24px;
    }

    .center-content .img {
        margin-top: 8%;
        float: right;
        width: 50%;
        display: inline-block;
    }

    .about-us {
        width: 100%;
        display: flex;
        background-image: linear-gradient(to bottom, #7D26CD 30%, #000099);
        border-radius: 0 0 15px 15px;
        justify-content: center;
    }
</style>
