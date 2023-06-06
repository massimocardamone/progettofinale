<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
       
        return view('create');
    }

    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }
}
