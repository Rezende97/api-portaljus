<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advogado;
use App\Http\Funcoes\Validation;
use App\Http\Requests\AdvogadoRequest;

class AdvogadoController extends Controller
{
    public function registerAdvogado(AdvogadoRequest $request)
    {
        $validationExist = Advogado::where('advogado', $request['advogado'])
                                    ->where('email', $request['email'])
                                    ->where('telefone', $request['telefone'])->exists();

        if ($validationExist) return response()->json(['error' => true, 'message' => 'Advogado já está cadastrado'], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        $advogado = [
            'advogado'  => strtolower($request['advogado']),
            'email'     => strtolower($request['email']),
            'telefone'  => strtolower($request['telefone'])
        ];

        Advogado::create($advogado);

        return response()->json(['error' => false, 'message' => 'Advogado cadastrado com sucesso'], 201)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
}
