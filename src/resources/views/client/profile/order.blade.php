@extends('client.profile.master-profile')
@section('profile-content')
<div class="row" style="width: 100%">
    <div style="width:95%">
        <h2 style="float: left; margin: 5% 0 0 10px">Order</h2>
    </div>
    <div class="table-order">
        <table class="table table-bordered" style="margin: 20px 10px 10px 0;">
            <thead>
                <tr>
                    <th class="detail">Detail</th>
                    <th class="total" style="width: 15%">Total</th>
                    <th class="discount" style="width: 20%">Discount</th>
                    <th class="status">Status</th>
                    <th class="created" style="width: 20%">Created at</th>
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
    .table-order {
        width: 95%;
    }

    th {
        text-align: center;
        vertical-align: middle;
        align-items:center;
        padding: auto;
    }

    @media (max-width: 567px) {
        th {
            font-size: 12px;
        }
    }

    @media (max-width: 391px) {
        .table-order {
            width: 90%;
            margin-left: 0;
        }

        .table {
            width: 95%;
        }
    }
</style>
