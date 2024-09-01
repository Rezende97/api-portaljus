<?php 

    namespace App\Service;

    use App\Repositories\AudienciaRepositories;

    class AudienciaService
    {
        protected $audiencia;
        
        public function __construct(AudienciaRepositories $audiencia)
        {
            $this->audiencia = $audiencia;
        }

        public function listAudiencia()
        {
           return $this->audiencia->listAudiencia();
        }
    }