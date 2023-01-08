<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PokeAddController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'data' => [
                'sucesso' => 'ok',
            ]
            ]);
    }
}