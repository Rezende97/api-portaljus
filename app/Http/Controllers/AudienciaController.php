<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAudiencia;
use App\Models\Audiencia;
use App\Http\Funcoes\Validation;
use App\Http\Requests\AudienciaRequest;
use App\Http\Requests\ListAudienciaRequest;
use App\Http\Requests\TipoAudienciaRequest;
use App\Service\AudienciaService;

class AudienciaController extends Controller
{

    public $audiencia;

    public function __construct(AudienciaService $audienciaService)
    {
        $this->audiencia = $audienciaService;
    }

    public function registerAudiencia(AudienciaRequest $request)
    {
        $validationExist = Audiencia::where('id_processo', $request['id_processo'])->exists();

        if ($validationExist) return response()->json(['error' => true, 'message' => 'Audiência já está cadastrado'], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        $Audiencia = [
            'id_processo'               =>  $request['id_processo'],
            'id_tipo_audiencia'         =>  $request['id_tipo_audiencia'],
            'id_varas'                  =>  $request['id_varas'],
            'id_regiaos'                =>  $request['id_regiaos'],
            'id_adv'                    =>  $request['id_adv'],
            'id_status'                 =>  $request['id_status'],
            'data_horario_audiencia'    =>  $request['data_horario_audiencia'],
            'finished'                  =>  $request['finished'],
        ];

        Audiencia::create($Audiencia);

        return response()->json(['error' => false, 'message' => 'Audiência cadastrada com sucesso'], 201)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    /**
     *
     * Salvar os nomes em letras maiusculas para evitar duplicagem
     *
     */
    public function tipoAudiencia(TipoAudienciaRequest $request)
    {
        $validationExist = TipoAudiencia::where('tipo_audiencia', $request['tipo_audiencia'])->exists();

        if ($validationExist) return response()->json(['error' => true, 'message' => 'Tipo de Audiência, já está cadastrado'], 401)->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        $tipoAudiencia = [
            'tipo_audiencia'  => strtolower($request['tipo_audiencia'])
        ];

        TipoAudiencia::create($tipoAudiencia);

        return response()->json(['error' => false, 'message' => 'Tipo de Audiência, cadastrado com sucesso'], 201)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }


    /**
     *
     * Endpoint list audiencia
     *
     */
    public function listAudiencia(ListAudienciaRequest $request)
    {
        $this->audiencia->listAudiencia();
    }
}
