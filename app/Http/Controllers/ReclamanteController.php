<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReclamanteRequest;
use Illuminate\Http\Request;
use App\Models\Reclamante;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class ReclamanteController extends Controller
{
    private $reclamante;
    private $email;
    private $cpf;
    private $phone;
    protected $returnHTTP;
    protected $message;

    public function cadastrarReclamante(ReclamanteRequest $request)
    {
        $dadosReclamante  = [
            'reclamante'    =>  $this->reclamante = $request->input('reclamante'),
            'email'         =>  $this->email      = $request->input('email'),
            'cpf'           =>  $this->cpf        = $request->input('cpf'),
            'phone'         =>  $this->phone      = $request->input('phone'),
        ];

        $status   = null;
        $response = [];

        try {

            $verificaReclamante   = Reclamante::where('reclamante', $dadosReclamante['reclamante'])->exists();

            if ($verificaReclamante) {
                $this->returnHTTP = false;
                $this->message    = 'Reclamante se encontra como cadastrado no Portal';
                $status           = 400;
            }else{
                $this->returnHTTP = true;
                $this->message    = 'Reclamante cadastrado com sucesso';
                $status           = 201;

                Reclamante::create($dadosReclamante);
            }

            $response = [
                'status'    => $this->returnHTTP,
                'message'   => $this->message
            ];

        } catch (QueryException $e) {

            $response = [
                'status'    => false,
                'message'   => 'Erro ao Cadastrar o reclamante'
            ];

            $status = 400;

        } catch (\Exception $e) {

            $response = [
                'status'    => false,
                'message'   => 'Erro ao Cadastrar o reclamante'
            ];

            $status = 400;
        }

        return response()->json($response, $status);
    }

    public function listReclamante()
    {
        $reclamadas      = Reclamante::all();

        $data_reclamante  = [];

        foreach ($reclamadas->toArray() as $key => $reclamante) {
            array_push($data_reclamante, [
                'id'    => $reclamante["id"],
                'reclamada' => ucwords(strtolower($reclamante["reclamante"]))
            ]);
        }

        return response()->json($data_reclamante);
    }
}
