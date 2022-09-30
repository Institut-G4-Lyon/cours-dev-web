<?php

namespace App\Controller;

use App\Core\Controller;

class ArticleController extends Controller
{
    public function index() {
        $this->render('articles');
    }
}
