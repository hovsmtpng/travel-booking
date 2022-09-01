<?php

namespace App\Controllers\CFe;

use App\Controllers\BaseController;

class CHome extends BaseController
{
    public function index()
    {
        //
        $data = [
            'title' => 'DAMRI',
            'isi' => 'pages/frontend/home'
        ];
        echo view('templates/layouts/frontend/template', $data);
    }
}