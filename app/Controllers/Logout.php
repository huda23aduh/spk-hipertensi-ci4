<?php

namespace App\Controllers;

use App\Models\UserModel;

class Logout extends BaseController
{
    public function __construct()
    {
        // Load the session library
        $this->session = \Config\Services::session();
    }

    public function index(): string
    {
        dd($this->session->destroy());
        
        // Redirect to the login page or any other page
        return redirect()->to('login');
    }
}
