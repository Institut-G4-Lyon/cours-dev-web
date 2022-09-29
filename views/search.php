<form method="get" action="/search">
    <input type="search" name="search">
    <button>Rechercher</button>
</form>

<?php
    if(isset($_GET["search"])) {
        echo $_GET["search"];
    }
?>
