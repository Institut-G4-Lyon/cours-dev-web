<?php

require_once __DIR__. "/../Core/Controller.php";

class HomeController extends \App\Core\Controller
{
    public function index() {
        $this->render("home");
    }
}
