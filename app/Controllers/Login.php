<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function __construct()
    {
        // Load the session library
        $this->session = \Config\Services::session();
    }

    public function index(): string
    {
        return view('login_page');
    }

    public function process() 
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        try {
            $model = new UserModel();

            $user = $model->where('username', $username)
                        ->where('password', $password)
                        ->first();

            if ($user) {
                $this->session->set($user);
                // Successful login
                return redirect()->to('spk');
            } else {
                // Failed login
                return redirect()->back()->with('error', 'Invalid username or password');
            }
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}
