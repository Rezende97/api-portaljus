<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regiao;
use App\Http\Funcoes\Validation;
use App\Http\Requests\RegiaoRequest;

class regiaoController extends Controller
{
    public function registeRegiao(RegiaoRequest $request)
    {
        $validationExist = regiao::where('regiao', $request['regiao'])->exists();

        if ($validationExist) return response()->json(['error' => true, 'message' => 'Região já está cadastrada'], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        $regiao = [
            'regiao'  => strtolower($request['regiao'])
        ];

        regiao::create($regiao);

        return response()->json(['error' => false, 'message' => 'Região cadastrada com sucesso'], 201)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
}
