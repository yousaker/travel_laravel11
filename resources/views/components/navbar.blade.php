<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="#" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                @auth
                <!-- Lien Home pour les utilisateurs connectés -->
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link {{ request()->is('welcome') ? 'active' : '' }}">Home</a>
                </li>
            @else
                <!-- Lien Home pour les invités -->
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
            @endauth
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <a href="package.html" class="nav-item nav-link">Packages</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="destination.html" class="dropdown-item">Destination</a>
                        <a href="booking.html" class="dropdown-item">Booking</a>
                        <a href="team.html" class="dropdown-item">Travel Guides</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>

            <!-- Affichage conditionnel des boutons Register et Logout -->
            <div class="d-flex align-items-center">
                @guest
                    <!-- Si l'utilisateur n'est pas authentifié -->
                    <a href="{{ route('register') }}" class="btn btn-primary rounded-pill py-2 px-4 me-2">Register</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill py-2 px-4 me-2">Login</a>
                @endguest

                @auth
                    <!-- Si l'utilisateur est authentifié -->
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger rounded-pill py-2 px-4">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>


