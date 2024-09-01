<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vara;
use App\Http\Funcoes\Validation;
use App\Http\Requests\VaraRequest;

class varaController extends Controller
{
    public function registerVara(VaraRequest $request)
    {
        $validationExist = vara::where('vara', $request['vara'])->exists();

        if ($validationExist) return response()->json(['status' => true, 'message' => 'Essa vara já se encontra cadastrada'], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        $vara = [
            'vara'  => strtolower($request['vara'])
        ];

        vara::create($vara);

        return response()->json(['status' => false, 'message' => 'Vara cadastrada com sucesso'], 201)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
}
