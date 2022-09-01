<?php

namespace App\Controllers;
use App\Models\MLogin;

use App\Controllers\BaseController;

class CLogin extends BaseController
{
    public function __construct()
    {
        $this->modellogin = new MLogin();
    }
    public function index()
    {
        //
        $data = [
            'title' => 'Login',
            // 'isi' => 'pages/Login'
        ];
        // echo view('pages/Login', $data);

        helper(['form']);
        if (empty(session()->get('email'))) {
        echo view('pages/Login', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }
    public function checklogin()
    {
        $session = session();
        // $model = new model_login();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $passdecryt = md5($password);

        $data = $this->modellogin->login($email, $password);
        // dd($data);
        if($data){
                $ses_data = [
                    'id_users'   => $data['id_users'],
                    'fullname'      => $data['fullname'],
                    'email'       => $data['email'],
                    'level'          => $data['level'],
                    'loggedin'      => TRUE
                ];
                $session->set($ses_data);
                if(session()->get('level') == 'administrator'){
                    return redirect()->to(base_url('CBa/CDashboard'));
                } else{
                    return redirect()->to(base_url('/'));
                }
        }else{
            $session->setFlashdata('msg', 'User not Found');
            return redirect()->to(base_url('login/index'));
        }
    }
    function logout()
    {
        $session = session();
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}