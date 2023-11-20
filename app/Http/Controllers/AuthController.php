<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->all(['cpf', 'password']);

        $validation  = validator::make($credenciais, [
            'cpf'    => 'required|string|max:11',
            'password' => 'required|min:6|max:15'
        ]);

        if($validation->fails()) return response()->json(['status' => false, 'message' => 'E-mail E Senha Obrigatório'], 403);

        $token = auth('api')->attempt($credenciais);

        if(!$token) return response()->json(['status' => false, 'message' => 'E-mail ou Senha Inválida teste'], 403);

        return response()->json(['status' => true, 'token' => $token, 'message' => 'Seja bem-vindo ao Portal Jus']);
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Invalidação realizado com sucesso']);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();
        return response()->json(['token' => $token]);
    }

    protected function me()
    {
        return response()->json(auth()->user());
    }
}
