<?php

namespace App\Controller;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index() {
        $this->setTemplate("admin");
        $this->render("about");
    }
}
