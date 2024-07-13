<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontend extends Controller
{
    public function index()  {
        return view('frontend.index');
    }
    
    public function about()  {
        return view('frontend.about');
    }

    public function blogDetails()  {
        return view('frontend.blog-details');
    }

    public function blog()  {
        return view('frontend.blog');
    }

    public function checkOut()  {
        return view('frontend.checkout');
    }

    public function contact()  {
        return view('frontend.contact');
    }

    public function shopDetails()  {
        return view('frontend.shop-details');
    }

    public function shop()  {
        return view('frontend.shop');
    }

    public function shoppingCart()  {
        return view('frontend.shopping-cart');
    }


}