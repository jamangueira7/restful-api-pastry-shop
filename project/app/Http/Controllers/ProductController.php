<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $products = Product::all();
        return response()->json(["Products" => $products]);
    }

    public function show(String $id, Request $request)
    {
        $product = Product::find($id);
        return response()->json(["Product" => $product]);
    }
    public function delete(String $id, Request $request)
    {
        $product = Product::find($id);

        if(!$product) {
            throw new Exception('Produto não existe.');
        }

        $product->delete();
        return response()->json(["Product" => $product]);
    }

    public function restore(String $id, Request $request)
    {
        $product = Product::withTrashed()->find($id);

        if(!$product) {
            throw new Exception('Produto não está desativado.');
        }

        $product->restore();
        return response()->json(["Product" => $product]);
    }

    public function create(ProductRequest $request)
    {
        $request->validated();

        try {
            $image = Storage::disk('local')->put("images", $request->file('photo'));
            $data = $request->all();
            $data['photo'] = $image;

            $product = Product::create($data);
        } catch (Exception $e) {
            throw new Exception( $e->getMessage());
        }

        return response()->json(["Product" => $product], 201);
    }

    public function update(String $id, ProductRequest $request)
    {
        $request->validated();

        try {
            $product = Product::find($id);

            if(!$product) {
                throw new Exception('Produto não existe.');
            }

            $delete = Storage::disk('local')->delete($product->photo);

            if(!$delete) {
                throw new Exception('A imagem não foi deletada.');
            }
            $image = Storage::disk('local')->put("images", $request->file('photo'));
            $data = $request->all();
            $data['photo'] = $image;

            $product->update($data);
        } catch (Exception $e) {
            throw new Exception( $e->getMessage());
        }

        return response()->json(["Product" => $product], 201);
    }
}
