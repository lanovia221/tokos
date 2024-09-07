<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('index',['title'=>'index']);
    }

    public function home()
    {
        return view('page.home',['title'=>'Home']);
    }

    public function shop()
    {
        return view('page.shop');
    }
}
