<?php

    namespace App\Http\Controllers\RouterViews;

    use Illuminate\Http\Request;

    class ReclamadaController
    {
        public function reclamada(Request $request)
        {
            return view('reclamada.reclamada', ['title' => 'reclamada']);
        }
    }
