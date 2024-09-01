<?php

    namespace App\Http\Controllers\RouterViews;

    use Illuminate\Http\Request;

    class ProcessoController
    {
        public function processo(Request $request)
        {
            return view('processo.processo', ['title' => 'processo']);
        }
    }
