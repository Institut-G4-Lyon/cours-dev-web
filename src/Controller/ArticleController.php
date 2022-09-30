<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\ArticleModel;

class ArticleController extends Controller
{
    public function index() {
        $articleModel = new ArticleModel();

        $results = $articleModel->fetchAll();

        $this->render('articles', [
            "results" => $results
        ]);
    }
}
