<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\Rank;
class DashBoardController extends Controller
{
    //
    public function home(){

        return view('client.home.index');
    }
    public function shop(){
        return view('client.shop.index');
    }
    public function blog(){
        return view('client.blog.index');
    }
    public function more(){
        dd(Session('discount'));
        $idRank = Auth()->user()->rank_id;
        $rank = Rank::find($idRank);
        $discount_rank = $rank->discount;
        $total = Session('Cart')->totalPrice - ($discount_rank*Session('Cart')->totalPrice)/100;
        dd($total);
        return view('client.more.index');
    }

}
