<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	return view('product.index');
    }

    public function show()
    {
    	return view('product.show');
    }

    public function viewVegetable()
    {
    	return view('product.vegetables');
    }
}
