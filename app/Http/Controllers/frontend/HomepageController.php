<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class HomepageController extends Controller
{
    public function index(){
        $shops = Shop::latest()->get();
        return view('frontend.homepage', compact('shops'));
    }
}
