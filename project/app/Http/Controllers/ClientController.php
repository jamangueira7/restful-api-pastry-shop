<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    public function list(Request $request)
    {
        $clients = Client::all();
        return response()->json(["Clients" => $clients]);
    }

    public function show(String $id)
    {
        $client = Client::find($id);
        return response()->json(["Client" => $client]);
    }

    public function delete(String $id)
    {
        $client = Client::find($id);

        if(!$client) {
            throw new Exception('Cliente não existe.', 400);
        }

        $client->delete();
        return response()->json(["Client" => $client]);
    }

    public function restore(String $id)
    {
        $client = Client::withTrashed()->find($id);

        if(!$client) {
            throw new Exception('Cliente não está desativado.');
        }

        $client->restore();
        return response()->json(["Client" => $client]);
    }

    public function create(ClientRequest $request)
    {
        $request->validated();

        try {
            $client = Client::create($request->all());
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return response()->json(["Client" => $request->all()], 201);
    }

    public function update(String $id, ClientRequest $request)
    {
        $request->validated();

        try {
            $client = Client::find($id);

            if(!$client) {
                throw new Exception('Cliente não existe.');
            }

            $client->update($request->all());
        } catch (Exception $e) {
            throw new Exception( $e->getMessage());
        }

        return response()->json(["Client" => $client]);
    }
}
