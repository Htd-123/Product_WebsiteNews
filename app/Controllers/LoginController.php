<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login_view');
    }

    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\login_modal();
        $user = $userModel->getUserByUsername($username, $password);

        if ($user) {
            
            return view('admin_view');
        }

        return view('login_view', ['error' => 'Tên người dùng hoặc mật khẩu không đúng']);
    }
}
