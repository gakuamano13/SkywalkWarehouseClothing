<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(3);
        // これでページネーション機能が追加される

        return view('product.index')
            ->with('products', $products);
    }

    public function show($id)
    {
        return view('product.show')
            ->with('product', Product::find($id));
    }
}
