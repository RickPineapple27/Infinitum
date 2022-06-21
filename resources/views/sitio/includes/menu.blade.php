<div class="container">
        <a class="navbar-brand" href="{{ route('sitio.index')}}"><img src="assets/img/portfolio/infinitum.png" width="150" height="30"></a>

        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-black rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('sitio.chat')}}">Atencion  al cliente</a></li>

                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('sitio.contactanos')}}">Contratar</a></li>

                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('sitio.about')}}">Acerca de</a></li>

            </ul>
        </div>
    </div>
