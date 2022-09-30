<?php

namespace App\Controller;

class AdminController extends \App\Core\Controller
{
    public function index() {
        $this->render("admin");
    }
}
