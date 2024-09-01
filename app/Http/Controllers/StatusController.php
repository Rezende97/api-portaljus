<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Status;
use App\Http\Funcoes\Validation;

class StatusController extends Controller
{
    private $status;

    public function registerStatus(Request $request)
    {

        $validacao = Validation::validationData($request->all(), [
            'status'    =>  'required|string|max:150'
        ]);

        if (!$validacao) return response()->json(['error' => true, 'message' => 'Erro ao cadastrar o status'], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        $validationExist = Status::where('status', $request['status'])->exists();

        if ($validationExist) return response()->json(['error' => true, 'message' => 'O status, já está cadastrado'], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        $status = [
            'status'  => strtolower($request['status'])
        ];

        Status::create($status);

        return response()->json(['error' => false, 'message' => 'Status cadastrado com sucesso'], 201)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
}
