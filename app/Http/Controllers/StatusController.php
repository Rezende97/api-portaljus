<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Status;

class StatusController extends Controller
{
    private $status;

    public function registerStatus(Request $request)
    {
        $dadoStatus = [
            'status'    => $this->status = $request->input('status')
        ];

        $validator = Validator::make($dadoStatus, [
            'status'    =>  'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'Erro ao cadastrar o status'], 400);
        }

        Status::create($dadoStatus);

        return response()->json(['status' => true, 'message' => 'Status cadastrado com sucesso'], 201);
    }
}
