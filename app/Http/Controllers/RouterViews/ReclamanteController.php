<?php

    namespace App\Http\Controllers\RouterViews;

    use Illuminate\Http\Request;

    class ReclamanteController
    {
        public function reclamante(Request $request)
        {
            return view('reclamante.reclamante', ['title' => 'reclamante']);
        }
    }
