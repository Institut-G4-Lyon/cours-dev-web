<?php

class AdminController extends \App\Core\Controller
{
    public function index() {
        require_once __DIR__."/../../views/admin.php";
    }
}
