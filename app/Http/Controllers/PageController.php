<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function home() {
        return view('pages.home');
    }

    public function shop() {
        return view('pages.shop');
    }

    public function categories() {
        return view('pages.category');
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }
    public function productDetails()
    {
        return view('pages.product-details');
    }
    public function checkOut()
    {
        return view('pages.checkout');
    }
}
