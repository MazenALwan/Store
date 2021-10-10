<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductListPage() {

        $products = Product::get();
        return view('welcome', ['products' => $products]);
    }
}
