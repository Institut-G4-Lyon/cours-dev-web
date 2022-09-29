<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link <?= $pathname === "/" ? "active" : "" ?>">Home</a></li>
            <li class="nav-item"><a href="/about" class="nav-link <?= str_starts_with($pathname, "/about") ? "active" : "" ?>">A propos</a></li>
            <li class="nav-item"><a href="/search" class="nav-link <?= str_starts_with($pathname, "/search") ? "active" : "" ?>">Recherche</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
</div>
