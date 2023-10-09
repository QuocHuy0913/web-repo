@extends('admin.layouts.master')

@section('title', 'Categories')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th width="20%">Entry</th>
                        <th width ="2%"></th>
                        <th width ="2%"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IP15</td>
                        <td>Iphone 15</td>
                        <td>02/02/2003</td>
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

@endsection
