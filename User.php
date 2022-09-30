<?php

class User {
    private $email = null;
    private $password = null;

    public function login() {
        // login user
    }
}

class Visitor extends User
{
    public function setEmail($emailParam) {
        if(is_string($emailParam)) {
            $this->email = $emailParam;
        } else {
            throw new Error("email must be of type string");
        }
    }
}

class Admin extends User {
}

$visitor = new Visitor();
$admin = new Admin();

var_dump($visitor);
var_dump($admin);
