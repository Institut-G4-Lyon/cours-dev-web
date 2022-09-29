<?php

require_once __DIR__."/../config/database.php";

$results = $db->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="List">
    <?php foreach ($results as $result): ?>
        <div class="Card">
            <h3 class="Card__Title"><?= $result["title"] ?></h3>
            <p class="Card__Description"><?= $result["body"] ?></p>
        </div>
    <?php endforeach; ?>
</div>
