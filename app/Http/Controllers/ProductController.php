<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductListPage() {

        $products = Product::get();
        return view('productListPage', ['products' => $products]);
    }
    public function create(Request $request) { 
        $rules = [
            'name' => 'required|string|min:4|max:255',
            'descirption' => 'required|string|min:4|max:255',
            'price'=> 'required|integer'
        ];
        $productData = $request->input();
            $product = new Product();

            $product->name = $productData['productName'];
            $product->description = $productData['productDescription'];
            $product->price = $productData['productPrice'];
            $product->quantity = $productData['productQuantity'];
            $product->save();
            return redirect('/')->with('status',"Insert successfully");
    }
    public function getProductDetailPage(Request $request) {
        $product = Product::get()->where('id', $request->route('id'))->first();

        return view('productDetailPage', ['product'=> $product]);
    }
}

