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
    public function delete(String $id, Request $request): bool
    {
        $product = Product::find($id);

        if(!$product) {
            throw new Exception('Produto não existe.');
        }

        $product->delete();
        return true;
    }

    public function restore(String $id, Request $request): bool
    {
        $product = Product::withTrashed()->find($id);

        if(!$product) {
            throw new Exception('Produto não está desativado.');
        }

        $product->restore();
        return true;
    }
}
