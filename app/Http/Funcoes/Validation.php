<?php

    namespace App\Http\Funcoes;

    use Illuminate\Support\Facades\Validator;

    class Validation
    {
        public static function validationData($dataValidation, $regras)
        {
            $validation = Validator::make($dataValidation, $regras);

            if($validation->fails()) {
                return false;
            }

            return true;
        }
    }
