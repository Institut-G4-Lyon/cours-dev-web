<?php

namespace App\Controller;

use App\Core\Controller;

class SearchController extends Controller
{
    public function index() {
        $this->render("search");
    }
}
