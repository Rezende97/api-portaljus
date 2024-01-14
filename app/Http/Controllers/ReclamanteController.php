<?php

namespace App\Http\Controllers;

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

    public function cadastrarReclamante(Request $request)
    {
        $status   = null;
        $response = [];

        try {

            $validation = Validator::make($request->all(), [
                'reclamante' => 'required|max:100|string',
                'cpf'        => 'required|max:11|string',
                'phone'      => 'required|max:11|string',
            ]);

            $verifiqueReclamante = Reclamante::where('reclamante', $request->input('reclamante'))->exists();
            $verifiqueCpf        = Reclamante::where('reclamante', $request->input('cpf'))->exists();

            if ($verifiqueReclamante || $verifiqueCpf) {
                $this->returnHTTP = true;
                $this->message    = 'Usuário já cadastrado';
            }else{
                Reclamante::create($request->all());
            }

            $response = [
                'status'    => true,
                'message'   => 'Reclamante criado com sucesso'
            ];

            $status = 200;

        } catch (QueryException $e) {

            $response = [
                'status'    => false,
                'message'   => 'Erro ao Cadastrar o reclamante'
            ];

            $status = 401;

        } catch (\Exception $e) {

            $response = [
                'status'    => false,
                'message'   => 'Erro ao Cadastrar o reclamante'
            ];

            $status = 401;
        }

        return response()->json($response, $status);
    }
}
