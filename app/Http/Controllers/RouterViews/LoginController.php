<?php

    namespace App\Http\Controllers\RouterViews;

    use Illuminate\Http\Request;

    class LoginController
    {
        public function autenticacao(Request $request)
        {
            return view('login', ['title' => 'Portal Jurídico']);
        }
    }
