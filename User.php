<?php

class User
{
    private $username = null;
    private $email = null;
    private $password = null;

    public function setEmail($emailParam) {
        if(is_string($emailParam)) {
            $this->email = $emailParam;
        } else {
            throw new Error("email must be of type string");
        }
    }

    public function direBonjour() {
        echo "salut tout le monde";
    }
}

$user1 = new User();
$user1->setEmail(123);

var_dump($user1);
