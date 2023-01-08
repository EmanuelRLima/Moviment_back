<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'sucesso' => true,
            'data' => 'xxxx',
        ]);
    }

    public function register(Request $request, User $user)
    {

        $request['password'] = bcrypt($request['password']);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // if(!$user = $user->create($user))
            // abort(500, 'Erro ao criar novo usuário');
        return response()->json([
            'data' => [
                'user' => $user,
            ]
        ]);
    }
}
