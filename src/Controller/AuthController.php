<?php

namespace App\Controller;

class AuthController extends \App\Core\Controller
{
    public function login() {
        $this->render("login");
    }
}
