<nav class="navbar navbar1 navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homeBiographies') }}">Biografie</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle active" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Informazioni
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item">Biografia</a></li>

                        <li><a class="dropdown-item">Contatti</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
