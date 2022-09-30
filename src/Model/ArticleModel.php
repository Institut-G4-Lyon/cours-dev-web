<?php

namespace App\Model;

use PDO;

class ArticleModel
{
    public function fetchAll() {
        $db = new PDO("mysql:dbname=cours_php_g4;host=localhost:8889", "root", "root");

        return $db->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);
    }
}
