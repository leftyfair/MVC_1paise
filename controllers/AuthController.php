<?php

namespace app\controllers;

use app\core\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->setLayout('auth');
    }

    public function login(Request $request)
    {
        if ($request->isPost()) {
            return "Date handle";
        }
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return "Date handle register";
        }
        return $this->render('register');
    }
}
