<?php

$username = $_POST["username"] ?? null;
$password = $_POST["password"] ?? null;

$passwordHash = "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8";

if($username === "admin" && hash($password) === $passwordHash) {
    echo "bienvenue";
} else {
    header("Location: /login");
}
