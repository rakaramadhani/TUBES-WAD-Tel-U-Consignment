<?php

namespace App\Http\Controllers\frontend;

use App\Models\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $shops = Shop::paginate(3);
        return view('frontend.shop', compact('shops'));
    }
    public function show(Shop $shop){
        $related_shops = Shop::get();
        return view('frontend.detail', compact('shop','related_shops'));
    }
}
