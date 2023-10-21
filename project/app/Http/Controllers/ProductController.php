<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(Request $request): string
    {
        return Product::all()->toJson();
    }

    public function show(String $id, Request $request): string
    {
        return Product::find($id)->toJson();
    }
}
