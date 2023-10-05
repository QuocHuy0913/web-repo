@extends('admin.layouts.master')

@section('title', 'Add a new product')


@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div style="display: grid; grid-template-columns: repeat(2, 1fr)">
                    <div class="mb-3">
                        <label for="">Code</label>
                        <input type="text" name="code" class="form-control w-50" placeholder="Product Code..." value="{{old('code')}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Category</label>
                        <select class="form-control w-50" required name="category">
                            <option value="0">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>


                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control w-50" placeholder="Product Name..." value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Brand</label>
                        <select class="form-control w-50" required name="brand">
                            <option value="0">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div class="mb-3">
                        <label for="">Amount</label>
                        <input type="number" name="amount" class="form-control w-50" placeholder="Product Amount" min="1" max="10" value="{{old('amount')}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Buying Prices</label>
                        <input type="number" name="buy" class="form-control w-50" placeholder="Product Buying..." value="{{old('buy')}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control w-50" placeholder="Product Imgae..." value="{{old('image')}}">
                    </div>

                    <div class="mb-3">
                        <label for="">Selling Prices</label>
                        <input type="number" name="sell" class="form-control w-50" placeholder="Product Selling..." value="{{old('sell')}}">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Add New</button>
                @csrf
            </form>
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
@endsection

