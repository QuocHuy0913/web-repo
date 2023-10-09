@extends('admin.layouts.master')

@section('title', 'Products')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of Products</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th width="15%">Name</th>
                        <th width="20%">Image</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th width ="2%">Amnout</th>
                        <th>Buying</th>
                        <th>Selling</th>
                        <th>Entry</th>
                        <th width ="2%"></th>
                        <th width ="2%"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IP15</td>
                        <td>Iphone 15</td>
                        <td>Edinburgh</td>
                        <td>SmartPhone</td>
                        <td>Apple</td>
                        <td>158</td>
                        <td>2000$</td>
                        <td>2300$</td>
                        <td>02/02/2003</td>
                        <td><a href="" class="btn btn-warning"><span>Update</span></a></td>
                        <td><a href="" class="btn btn-danger"><span>Delete</span></a></td>
                    </tr>
                    <tr>
                        <td>SS20</td>
                        <td>SamSung S20</td>
                        <td>Edinburgh</td>
                        <td>SmartPhone</td>
                        <td>Apple</td>
                        <td>58</td>
                        <td>1000$</td>
                        <td>300$</td>
                        <td>01/02/2003</td>
                        <td><a href="" class="btn btn-warning"><span>Update</span></a></td>
                        <td><a href="" class="btn btn-danger"><span>Delete</span></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset ('admins')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset ('admins')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset ('admins')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset ('admins')}}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset ('admins')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset ('admins')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset ('admins')}}/js/demo/datatables-demo.js"></script>

<script>
    let son = document.querySelector("#hi");
    son.classList.remove("sorting");
    console.log(son);
</script>
@endsection
