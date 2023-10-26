@extends('client.profile.master-profile')
@section('profile-content')
<div class="row" style="display:flex; justify-content:center">
    <div style="width:95%">
        <h2 style="float: left; margin-top: 5%">Order</h2>
    </div>
    <div class="password" style="width:95%">
        <table class="table table-bordered" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th style="width:23%">Detail</th>
                    <th style="width:17%">Total</th>
                    <th style="width:17%">Discount</th>
                    <th style="width:23%">Status</th>
                    <th style="width:20%">Create at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" style="text-align: center; vertical-align: middle; align-items:center">
                        <h5 style="display: inline-block">No order has been made yet</h5>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
<style>
    th {
        text-align: center;
        vertical-align: middle;
        align-items:center;
        padding: auto;
    }
</style>
