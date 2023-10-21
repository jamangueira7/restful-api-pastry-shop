<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
}
