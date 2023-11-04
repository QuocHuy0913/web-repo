@extends('client.layouts.master')
@section('content')
    <div class="container" style="max-width: 1270px">
        <div class="row" style="display: flex; justify-content:center">
            <div style="border : 1px solid #eee">
                <img src="{{asset('images/banner-1.webp')}}" alt="">
            </div>
        </div>
    </div>
@endsection

<style>
    @media (max-width:700px) {
        img {
            width: 98%;
        }
    }
</style>
