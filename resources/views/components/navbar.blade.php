


<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    @if (session()->has('Add'))
    <div class="alert alert-success text-center position-fixed top-0 start-50 translate-middle-x p-3 rounded shadow"
         role="alert"
         id="success-alert"
         style="margin-top: 20px; z-index: 1050; min-width: 300px;">
        <strong>{{ session()->get('Add') }}</strong>
    </div>
@endif


    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
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

        <!-- Bouton fixe pour mobile -->
        <a href="#" class="btn btn-gradient rounded-pill py-2 px-4 fixed-mobile-btn d-lg-none" data-bs-toggle="modal" data-bs-target="#addPublicationModal">
            <i class="fa fa-plus me-2"></i>Ajouter une publication
        </a>


        <a href="#" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                @auth
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link {{ request()->is('welcome') ? 'active' : '' }}">Home</a>
                </li>
                @else
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

            <div class="d-flex align-items-center">
                @guest
                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 me-2" data-bs-toggle="modal"
                    data-bs-target="#registerModal">Register</a>
                <a href="#" class="btn btn-outline-primary rounded-pill py-2 px-4 me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Login</a>
                @endguest

                @auth
                <a href="#" class="btn btn-gradient rounded-pill py-2 px-4 me-2 d-none d-lg-inline-block" data-bs-toggle="modal" data-bs-target="#addPublicationModal">
                    <i class="fa fa-plus me-2"></i>Ajouter une publication
                </a>
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
</div>


<!-- Modal pour la connexion -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">{{ __('Login') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Session Status -->
                <x-auth-session-status class="alert alert-success mb-3" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control mt-1" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                    </div>

                    <!-- Forgot Password & Login Button -->
                    <div class="d-flex justify-content-between align-items-center">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="btn btn-primary ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour l'inscription -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">{{ __('Register') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control mt-1" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="form-control mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                    </div>

                    <!-- Already Registered Link & Register Button -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a class="text-decoration-none text-primary" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                            {{ __('Already registered?') }}
                        </a>
                        <x-primary-button class="btn btn-primary">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal pour Ajouter une publication -->
<!-- Modal pour ajouter une publication -->
@auth
<div class="modal fade" id="addPublicationModal" tabindex="-1" aria-labelledby="addPublicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addPublicationModalLabel">Ajouter une publication</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addTahwissaModal">
                        Ajouter une publication
                    </button>
                    <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#addProductModal">
                        Ajouter un produit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth

@auth
<!-- Modal pour Ajouter une publication -->
<div class="modal fade" id="addTahwissaModal" tabindex="-1" aria-labelledby="addTahwissaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addTahwissaModalLabel">Ajouter une Tahwissa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control rounded" id="titre" name="titre" required>
                    </div>

                    <!-- Liste des catégories depuis la table categories -->
                    <div class="mb-3">
                        <label for="categorie" class="form-label">Catégorie</label>
                        <select class="form-control rounded" id="categorie" name="categorie" required>
                            <option value="">Sélectionner une catégorie</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_Categories }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Liste des wilayas d'Algérie -->
                    <div class="mb-3">
                        <label for="wilaya" class="form-label">Wilaya</label>
                        <select class="form-control rounded" id="wilaya" name="wilaya" required>
                            <option value="">Sélectionner une wilaya</option>
                            <option value="Adrar">Adrar</option>
                            <option value="Chlef">Chlef</option>
                            <option value="Laghouat">Laghouat</option>
                            <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                            <option value="Batna">Batna</option>
                            <option value="Béjaïa">Béjaïa</option>
                            <option value="Biskra">Biskra</option>
                            <option value="Béchar">Béchar</option>
                            <option value="Blida">Blida</option>
                            <option value="Bouira">Bouira</option>
                            <option value="Tamanrasset">Tamanrasset</option>
                            <option value="Tébessa">Tébessa</option>
                            <option value="Tlemcen">Tlemcen</option>
                            <option value="Tiaret">Tiaret</option>
                            <option value="Tizi Ouzou">Tizi Ouzou</option>
                            <option value="Alger">Alger</option>
                            <option value="Djelfa">Djelfa</option>
                            <option value="Jijel">Jijel</option>
                            <option value="Sétif">Sétif</option>
                            <option value="Saïda">Saïda</option>
                            <option value="Skikda">Skikda</option>
                            <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                            <option value="Annaba">Annaba</option>
                            <option value="Guelma">Guelma</option>
                            <option value="Constantine">Constantine</option>
                            <option value="Médéa">Médéa</option>
                            <option value="Mostaganem">Mostaganem</option>
                            <option value="M'Sila">M'Sila</option>
                            <option value="Mascara">Mascara</option>
                            <option value="Ouargla">Ouargla</option>
                            <option value="Oran">Oran</option>
                            <option value="El Bayadh">El Bayadh</option>
                            <option value="Illizi">Illizi</option>
                            <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                            <option value="Boumerdès">Boumerdès</option>
                            <option value="El Tarf">El Tarf</option>
                            <option value="Tindouf">Tindouf</option>
                            <option value="Tissemsilt">Tissemsilt</option>
                            <option value="El Oued">El Oued</option>
                            <option value="Khenchela">Khenchela</option>
                            <option value="Souk Ahras">Souk Ahras</option>
                            <option value="Tipaza">Tipaza</option>
                            <option value="Mila">Mila</option>
                            <option value="Aïn Defla">Aïn Defla</option>
                            <option value="Naâma">Naâma</option>
                            <option value="Aïn Témouchent">Aïn Témouchent</option>
                            <option value="Ghardaïa">Ghardaïa</option>
                            <option value="Relizane">Relizane</option>
                            <option value="Timimoun">Timimoun</option>
                            <option value="Bordj Badji Mokhtar">Bordj Badji Mokhtar</option>
                            <option value="Ouled Djellal">Ouled Djellal</option>
                            <option value="Béni Abbès">Béni Abbès</option>
                            <option value="In Salah">In Salah</option>
                            <option value="In Guezzam">In Guezzam</option>
                            <option value="Touggourt">Touggourt</option>
                            <option value="Djanet">Djanet</option>
                            <option value="El M'Ghair">El M'Ghair</option>
                            <option value="El Menia">El Menia</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control rounded" id="adresse" name="adresse" required>
                    </div>

                    <div class="mb-3">
                        <label for="numero_telephone" class="form-label">Numéro de téléphone</label>
                        <input type="text" class="form-control rounded" id="numero_telephone" name="numero_telephone" required>
                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="number" step="0.01" class="form-control rounded" id="prix" name="prix" required>
                    </div>

                    <div class="mb-3">
                        <label for="petite_description" class="form-label">Petite Description</label>
                        <textarea class="form-control rounded" id="petite_description" name="petite_description" rows="2"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="nombre_de_jours" class="form-label">Nombre de jours</label>
                        <input type="number" class="form-control rounded" id="nombre_de_jours" name="nombre_de_jours">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control rounded" id="description" name="description" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image_tahwissa" class="form-label">Image du Tahwissa</label>
                        <input type="file" class="form-control rounded" id="image_tahwissa" name="image_tahwissa" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-pill">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endauth

@auth
<!-- Modal pour Ajouter un produit -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addProductModalLabel">Ajouter un produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control rounded" id="product_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prix</label>
                        <input type="number" class="form-control rounded" id="price" name="prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control rounded" id="telephone" name="telephone" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control rounded" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="images" class="form-label">Image du produit</label>
                        <input type="file" class="form-control rounded" id="images" name="images" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill">Ajouter Produit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endauth
