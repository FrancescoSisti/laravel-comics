@vite("resources/js/app.js")
@vite("resources/scss/app.scss")

<header>
    <div class="bg-primary py-1">
        <div class="container">
            <div class="d-flex justify-content-end text-white">
                <span class="me-3">DC POWER℠ VISA®</span>
                <span>ADDITIONAL DC SITES<i class="bi bi-caret-down-fill ms-1"></i></span>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
        <div class="container">
            <a class="navbar-brand py-3" href="#">
                <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">CHARACTERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOP</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
</header>
