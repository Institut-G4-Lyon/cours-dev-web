<?php

namespace App\Core;

class Controller
{
    public function render($view, $values = []) {
        extract($values);

        require_once __DIR__."/../../views/$view.php";
    }
}
