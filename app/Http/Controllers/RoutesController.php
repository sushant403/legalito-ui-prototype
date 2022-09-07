<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function product()
    {
        return view('products.product');
    }

    public function contact()
    {
        return view('contact');
    }
}
