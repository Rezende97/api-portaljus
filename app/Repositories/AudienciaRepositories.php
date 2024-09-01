<?php 

    namespace App\Repositories;

    use App\Models\Audiencia;

    class AudienciaRepositories{

        protected $audienciaModel;

        public function listAudiencia()
        {
            $audiencia = Audiencia::with(['processo', 'tipoAudiencia', 'vara', 'regiao', 'advogado', 'status'])->get();

            dd($audiencia);
        }
    }