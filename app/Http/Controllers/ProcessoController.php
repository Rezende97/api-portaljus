<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcessoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use App\Models\Processos;

class ProcessoController extends Controller
{
    private $num_processo;
    private $id_reclamante;
    private $id_reclamada;
    private $observacao;

    public function cadastrarProcesso(ProcessoRequest $request)
    {
        $dadosProcesso = [
            'num_processo'  => $this->num_processo  = $request->input('num_processo'),
            'id_reclamante' => $this->id_reclamante = $request->input('id_reclamante'),
            'id_reclamada'  => $this->id_reclamada  = $request->input('id_reclamada'),
            'observacao'    => $this->observacao    = $request->input('observacao'),
        ];

        $status   = null;
        $response = [];

        try {

            Processos::create($dadosProcesso);
            
            $response = [
                'status'    => true,
                'message'   => 'Processo cadastrado com sucesso'
            ];

            $status = 201;


        } catch (QueryException $e) {

            $response = [
                'status'    => false,
                'message'   => 'Erro ao Cadastrar o Processo'
            ];

            $status = 400;

        } catch (\Exception $e) {

            $response = [
                'status'    => false,
                'message'   => 'Erro ao Cadastrar o Processo'
            ];

            $status = 400;
        }

        return response()->json($response, $status);
    }

    public function listProcesso()
    {

    }
}
