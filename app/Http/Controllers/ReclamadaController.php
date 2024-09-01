<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReclamadaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Reclamada;

class ReclamadaController extends Controller
{
    private $reclamada;

    protected $response = null;

    public function cadastraReclamada(ReclamadaRequest $request)
    {
        $dadosReclamada = [
            'reclamada' => $this->reclamada = $request->input('reclamada')
        ];

        try {

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

        return response()->json($this->response);
    }

    public function listReclamada(Request $request)
    {
        $reclamadas      = Reclamada::all();

        $data_reclamada  = [];

        foreach ($reclamadas->toArray() as $key => $reclamada) {
            array_push($data_reclamada, [
                'id'    => $reclamada["id"],
                'reclamada' => ucwords(strtolower($reclamada["reclamada"]))
            ]);
        }

        return response()->json($data_reclamada);
    }
}
