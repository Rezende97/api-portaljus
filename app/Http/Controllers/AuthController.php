<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $credenciais = $request->all(['cpf', 'password']);

        $token = auth('api')->attempt($credenciais);
       
        if(!$token) return response()->json(['status' => false, 'message' => 'Invalid Email or Password']);

        return response()->json(['status' => true, 'token' => $token, 'message' => 'Seja bem-vindo ao Portal Jurídico']);
    }

    public function logout()
    {
        auth('api')->logout();
        
        return response()->json(['message' => 'Invalidation successfully completed']);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();

        return response()->json(['status' => 'success', 'token' => $token]);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }
}
