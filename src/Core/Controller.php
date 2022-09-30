<?php

namespace App\Core;

class Controller
{
    private $template = "base";

    public function setTemplate($template) {
        $this->template = $template;
    }

    public function render($view, $values = []) {
        extract($values);

        ob_start();
        require_once __DIR__."/../../views/$view.php";
        $content = ob_get_clean();

        require_once __DIR__."/../../views/templates/$this->template.php";
    }
}
