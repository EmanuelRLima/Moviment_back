<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // To-do: Validar request
        $credentials = $request->only('email','password');

        if(!auth()->attempt($credentials)) abort(401, 'Erro');

        $token = auth()->user()->createToken('auth_token');
        return response()->json([
            'data' => [
                'sucesso' => 'Logado com sucesso',
                'token' => $token->plainTextToken
            ]
            ]);
    }

    public function logout(){
        auth()->user()->tokens()->delete(); //Remove todos os tokens do usuario
        //auth()->user()->currentAccessTokens()->delete();
        return response()->json([
        'sucesso' => 'Deslogado com sucesso!',
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
