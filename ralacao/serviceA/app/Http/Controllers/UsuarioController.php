<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UsuarioController extends Controller
{
    public function getProducts()
{
    $client = new Client();
    $response = $client->get('http://127.0.0.1:8001/api/products');
    $products = json_decode($response->getBody(), true);
    return response()->json($products);
}
}
