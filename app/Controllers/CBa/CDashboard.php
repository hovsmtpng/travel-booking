<?php

namespace App\Controllers\CBa;

use App\Controllers\BaseController;

class CDashboard extends BaseController
{
    public function index()
    {
        //
        $data = [
            'title' => 'Dashboard',
            'isi' => 'pages/backend/dashboard'
        ];
        echo view('templates/layouts/backend/template', $data);
    }
}