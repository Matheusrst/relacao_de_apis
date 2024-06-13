<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $products)
    {
    $products = Product::all();
    return response()->json($products);
    }

}
