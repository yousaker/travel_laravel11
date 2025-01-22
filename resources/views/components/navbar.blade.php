<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{ __('navbar.address') }}</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{ __('navbar.phone') }}</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{ __('navbar.email') }}</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light sticky-navbar px-4 px-lg-5 py-3 py-lg-0">
        <!-- Mobile Button -->
        <a href="#" class="btn btn-gradient rounded-pill py-2 px-4 fixed-mobile-btn d-lg-none" data-bs-toggle="modal" data-bs-target="#addPublicationModal">
            <i class="fa fa-plus me-2"></i>{{ __('navbar.add_tahwissa') }}
        </a>

        <a href="#" class="navbar-brand p-0 me-4">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>{{ __('navbar.brand') }}</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <!-- Main Navigation -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link {{ request()->is('welcome') ? 'active' : '' }}">{{ __('navbar.home') }}</a>
                </li>
                @else
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">{{ __('navbar.home') }}</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a href="{{ route('tahwissa.show') }}" class="nav-link">{{ __('navbar.tahwissa') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.show') }}" class="nav-link">{{ __('navbar.product') }}</a>
                </li>
                <li class="nav-item">
                    <a href="service.html" class="nav-link">{{ __('navbar.services') }}</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">{{ __('navbar.contact') }}</a>
                </li>
            </ul>

            <!-- Language Switcher -->


            <!-- Desktop Button -->


            <a style="width: 350px;color: black" href="#" class="btn btn-gradient rounded-pill py-2 px-4 d-none d-lg-inline-block" data-bs-toggle="modal" data-bs-target="#addPublicationModal">
                <i class="fa fa-plus me-2"></i>{{ __('navbar.add_tahwissa') }}
            </a>

            <div class="ms-3">
                <a  style="color: black" href="{{ route('lang.switch', 'en') }}" class="btn btn-sm btn-outline-primary">EN</a>
                <a   style="color: black" href="{{ route('lang.switch', 'ar') }}" class="btn btn-sm btn-outline-primary">AR</a>
            </div>
            <!-- Right Controls -->
            <div class="d-flex align-items-center gap-3">
                @guest
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4" data-bs-toggle="modal" data-bs-target="#registerModal">
                        {{ __('navbar.register') }}
                    </a>
                    <a href="#" class="btn btn-outline-primary rounded-pill py-2 px-4" data-bs-toggle="modal" data-bs-target="#loginModal">
                        {{ __('navbar.login') }}
                    </a>
                </div>
                @endguest

                @auth
                <div class="d-flex align-items-center gap-3">
                    <!-- Dropdown -->
                    <div class="nav-item dropdown">
                        <a  href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-2 fs-5"></i>
                            <span  class="d-none d-md-inline">{{ __('navbar.my_account') }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-lg border-0">
                            <!-- Account Header -->
                            <div class="dropdown-header">
                                <h6 class="fw-bold mb-0">{{ auth()->user()->name }}</h6>
                                <small class="text-muted">{{ auth()->user()->email }}</small>
                            </div>
                            <div class="dropdown-divider"></div>

                            <!-- Account Options -->
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="fas fa-user me-2"></i>{{ __('navbar.profile') }}
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-cog me-2"></i>{{ __('navbar.settings') }}
                            </a>
                            <a href="{{ route('dashboard.index') }}" class="dropdown-item">
                                <i class="fas fa-tachometer-alt me-2"></i>{{ __('navbar.dashboard') }}
                            </a>

                            <!-- Separator -->
                            <div class="dropdown-divider"></div>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger bg-hover-light">
                                    <i class="fas fa-sign-out-alt me-2"></i>{{ __('navbar.logout') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</div>

<!-- Add Publication Modal -->
@auth
<div class="modal fade" id="addPublicationModal" tabindex="-1" aria-labelledby="addPublicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addPublicationModalLabel">{{ __('navbar.add_publication') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addTahwissaModal">
                        {{ __('navbar.add_publication') }}
                    </button>
                    <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#addProductModal">
                        {{ __('navbar.add_product') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
