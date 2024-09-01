<?php

    namespace App\Http\Controllers\RouterViews;

    use Illuminate\Http\Request;

    class DashboardController
    {
        public function dashboard(Request $request)
        {
            return view('index', ['title' => 'Portal Jurídico']);
        }
    }
