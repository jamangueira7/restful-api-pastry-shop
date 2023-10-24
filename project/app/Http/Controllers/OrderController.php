<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\EmailConfirmation;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function list(String $id)
    {
        $oders = Order::where('client_id', $id)->get();
        foreach ($oders as $order) {
            $order->products;
        }

        return response()->json(["Orders" => $oders]);
    }

    public function create(OrderRequest $request)
    {
        $request->validated();
        try {

            $client = Client::find($request->get('client_id'));

            $total = 0.0;
            $product_db = [];
            foreach ($request->get('products') as $key=>$product) {
                $product_db[] = Product::find($product['id']);
                $total += floatval($product_db[$key]['price'] * $product['amount']);
            }


            $order = new Order();
            $order->client_id = $request->get('client_id');
            $order->total = $total;
            $order->save();

            foreach ($product_db as $key=>$product) {
                $order->products()->attach($product['id'], ["amount" => $request->get('products')[$key]["amount"]]);
            }

            $order->products;

            Mail::to($client->email)->send(new EmailConfirmation($client->name, $order->id, $order->products->toArray(), $total));

        } catch (Exception $e) {

            throw new Exception( $e->getMessage());
        }

        return response()->json(["Order" => $order], 201);
    }


}
