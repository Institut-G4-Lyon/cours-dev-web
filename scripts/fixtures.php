<?php

require_once __DIR__ . "/../config/database.php";

$stmt = $db->prepare("INSERT INTO articles(title, body, image) VALUES (:title, :body, :image)");

for ($i = 0; $i < 20; $i++) {
    $stmt->execute([
        "title" => "Titre $i",
        "body" => "Salut les gens",
        "image" => ""
    ]);
}
