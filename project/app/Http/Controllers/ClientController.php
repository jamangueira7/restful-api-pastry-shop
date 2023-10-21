<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function list(Request $request): string
    {
        return Client::all()->toJson();
    }

    public function show(String $id, Request $request): string
    {
        return Client::find($id)->toJson();
    }

    public function delete(String $id, Request $request): bool
    {
        $client = Client::find($id);

        if(!$client) {
            throw new Exception('Cliente não existe.');
        }

        $client->delete();
        return true;
    }

    public function restore(String $id, Request $request): bool
    {
        $client = Client::withTrashed()->find($id);

        if(!$client) {
            throw new Exception('Cliente não está desativado.');
        }

        $client->restore();
        return true;
    }
}
