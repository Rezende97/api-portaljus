<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Reclamada;

class ReclamadaController extends Controller
{
    private $reclamada;

    protected $response = null;

    public function cadastraReclamada(Request $request)
    {
        $dadosReclamada = [
            'reclamada' => $this->reclamada = $request->input('reclamada')
        ];

        try {

            $validator = Validator::make($dadosReclamada,[
                'reclamada' => 'required|string|max:150'
            ]);

            if($validator->fails()){
                return response()->json(['status' => false, 'message' => 'Erro ao tentar realizar o cadastro da reclamada'], 400);
            }

            Reclamada::create($dadosReclamada);

            $this->response = [
                'status'    => true,
                'message'   => 'Reclamada cadastrada com sucesso'
            ];

            $status = 201;

        } catch (\Throwable $err) {

            $this->response = [
                'status'    => false,
                'message'   => 'Erro ao cadastrar a reclamada'
            ];

            $status = 400;
        }

        return response()->json($this->response, $status);
    }
}
