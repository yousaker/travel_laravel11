<div class="container-xxl py-5" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <!-- Titre "Tahwissa" traduit -->
            <h6 class="section-title bg-white text-center text-primary px-3">
                {{ __('tahwissa.tahwissa') }}
            </h6>

            <!-- Titre "Nos Tahwissa" traduit -->
            <h1 class="mb-5" style="color: #2A9D8F;">
                {{ __('tahwissa.our_tahwissa') }}
            </h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($tahwiss as $tahwissa)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item" style="border: 1px solid #ddd; border-radius: 15px; overflow: hidden; background-color: #FAFAFA;">
                    <div class="overflow-hidden" style="height: auto; text-align: center;">
                        <img class="img-fluid"
                             src="{{ asset('storage/' . $tahwissa->image_tahwissa) }}"
                             alt="{{ $tahwissa->titre }}"
                             style="
                                 width: 100%;
                                 height: 350px;
                                 display: inline-block;
                                 border-radius: 10px;">
                    </div>

                    <div class="d-flex border-bottom" style="background-color: #F4F4F4;">
                        <small class="flex-fill text-center border-end py-2" style="font-size: 22px; color: #121212;">
                            <i class="fa fa-map-marker-alt me-2"></i>
                            {{ $tahwissa->wilaya }}
                        </small>
                        <small class="flex-fill text-center border-end py-2" style="font-size: 22px; color: #0d0d0c;">
                            <i class="fa fa-calendar-alt me-2"></i>
                            {{ $tahwissa->nombre_de_jours }} {{ __('tahwissa.days') }}
                        </small>
                        <small class="flex-fill text-center py-2" style="font-size: 22px; color: #020202;">
                            <i class="fa fa-user me-2"></i>
                            {{ $tahwissa->user->name }}
                        </small>
                    </div>

                    <div class="text-center p-4">
                        <h3 class="mb-0" style="color: #264653;">${{ number_format($tahwissa->prix, 2) }}</h3>
                        <div class="mb-3">
                            <small class="fa fa-star" style="color: #E9C46A;"></small>
                            <small class="fa fa-star" style="color: #E9C46A;"></small>
                            <small class="fa fa-star" style="color: #E9C46A;"></small>
                            <small class="fa fa-star" style="color: #E9C46A;"></small>
                            <small class="fa fa-star" style="color: #E9C46A;"></small>
                        </div>
                        <p style="color: #6C757D;">{{ $tahwissa->petite_description }}</p>
                        <p style="color: #6C757D;"> {{ __('tahwissa.phone') }} : {{ $tahwissa->numero_telephone }}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button
                                class="btn btn-sm px-3 border-end btn-custom-dark"
                                style="border-radius: 30px 0 0 30px; border-color: #264653;"

                                data-bs-toggle="modal"
                                data-bs-target="#tahwissaModal"
                                data-titre="{{ $tahwissa->titre }}"
                                data-titre1="{{ $tahwissa->titre }}"
                                data-wilaya="{{ $tahwissa->wilaya }}"
                                data-adresse="{{ $tahwissa->adresse }}"
                                data-telephone="{{ $tahwissa->numero_telephone }}"
                                data-prix="{{ number_format($tahwissa->prix, 2) }}"
                                data-description="{{ $tahwissa->description }}"
                                data-image="{{ asset('storage/' . $tahwissa->image_tahwissa) }}"
                                data-user="{{ $tahwissa->user->name }}"
                                data-categorie="{{ $tahwissa->category->nom }}"
                                data-nombre-jours="{{ $tahwissa->nombre_de_jours ?? 'N/A' }}"
                            >
                                {{ __('tahwissa.read_more') }}
                            </button>
                            <button
                            class="btn btn-sm px-3 btn-custom-light"
                            style="border-radius: 0 30px 30px 0;"
                            data-bs-toggle="modal"
                            data-bs-target="#reservationModal"
                            data-tahwessa-id="{{ $tahwissa->id }}"
                        >
                            {{ __('tahwissa.book_now') }}
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tahwissaModal" tabindex="-1" aria-labelledby="tahwissaModalLabel" aria-hidden="true" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 15px; border: none;">
            <!-- En-tête de la modal avec une couleur moderne et une bordure de séparation -->
            <div class="modal-header" style="background: #2A9D8F; border-bottom: 3px solid #264653;">
                <h5 class="modalTitle1" style="color: white; font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: 600;">
                    <i class="fas fa-info-circle me-2"></i>
                    <span id="modalTitle1"></span> <!-- Titre dynamique -->
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" style="font-family: 'Open Sans', sans-serif;">
                <!-- Image du produit avec une bordure douce et un effet d'ombre -->
                <img id="modalImage" src=""
                     class="img-fluid rounded mb-4 shadow-sm"
                     alt="Image de Tahwissa"
                     style="max-height: 400px; width: 100%; object-fit: cover; border: 2px solid #e9ecef;">

                <!-- Titre du produit -->
                <h3 id="modalTitle" class="mb-4" style="color: #264653; font-size: 2rem; font-family: 'Poppins', sans-serif; font-weight: 700;"></h3>

                <!-- Affichage des informations du produit -->
                <div class="info-item mb-3">
                    <i class="fa fa-wallet me-2" style="color: #2A9D8F; width: 25px;"></i>
                    <span style="color: #4a4a4a; font-size: 1.1rem;">{{ __('tahwissa.price') }}: </span>
                    $<span id="modalPrix" style="color: #264653; font-weight: 600;"></span>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <!-- Informations géographiques et adresse -->
                        <div class="info-item mb-3">
                            <i class="fa fa-map-marker-alt me-2" style="color: #2A9D8F; width: 25px;"></i>
                            <span id="modalWilaya" style="color: #4a4a4a; font-size: 1.1rem;"></span>
                        </div>
                        <div class="info-item mb-3">
                            <i class="fa fa-address-card me-2" style="color: #2A9D8F; width: 25px;"></i>
                            <span id="modalAdresse" style="color: #4a4a4a; font-size: 1.1rem;"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Informations sur le guide et la durée -->
                        <div class="info-item mb-3">
                            <i class="fa fa-user me-2" style="color: #2A9D8F; width: 25px;"></i>
                            <span style="color: #4a4a4a; font-size: 1.1rem;">{{ __('tahwissa.guide') }}: </span>
                            <span id="modalUser" style="color: #264653; font-weight: 600;"></span>
                        </div>

                        <div class="info-item mb-3">
                            <i class="fa fa-calendar-alt me-2" style="color: #2A9D8F; width: 25px;"></i>
                            <span style="color: #4a4a4a; font-size: 1.1rem;">{{ __('tahwissa.duration') }}: </span>
                            <span id="modalNombreJours" style="color: #264653; font-weight: 600;"></span> {{ __('tahwissa.days') }}
                        </div>
                    </div>
                </div>

                <!-- Description du produit -->
                <div class="mb-4">
                    <h5 style="color: #2A9D8F; font-size: 1.4rem; font-family: 'Poppins', sans-serif; border-bottom: 2px solid #e9ecef; padding-bottom: 0.5rem;">
                        <i class="fas fa-align-left me-2"></i>{{ __('tahwissa.description') }}
                    </h5>
                    <p id="modalDescription" style="color: #6c757d; font-size: 1.1rem; line-height: 1.7;"></p>
                </div>

                <!-- Informations sur le téléphone -->
                <div class="info-item mb-3">
                    <i class="fa fa-phone me-2" style="color: #2A9D8F; width: 25px;"></i>
                    <span id="modalTelephone" style="color: #4a4a4a; font-size: 1.1rem;"></span>
                </div>
            </div>

            <!-- Pied de modal avec boutons de fermeture et de réservation -->
            <div class="modal-footer" style="border-top: 2px solid #e9ecef;">
                <button type="button"
                        class="btn btn-lg px-4"
                        style="background: #f8f9fa; color: #6c757d; border: 1px solid #dee2e6;"
                        data-bs-dismiss="modal">
                    {{ __('tahwissa.close') }}
                </button>
                <button type="button"
                        class="btn btn-lg px-4"
                        id="bookNowBtn"
                        style="background: #2A9D8F; color: white; border: none;">
                    {{ __('tahwissa.reserve') }}
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Réservation -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- En-tête de la modal avec une couleur de fond attrayante -->
            <div class="modal-header bg-gradient text-white">
                <h5 class="modal-title">{{ __('tahwissa.reserve_now') }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="reservationForm" method="POST" action="{{ route('reservations.store') }}">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_tahwessa" id="reservationTahwessaId">

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('tahwissa.name') }}</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="prenom" class="form-label">{{ __('tahwissa.surname') }}</label>
                        <input type="text" class="form-control" name="prenom" required>
                    </div>

                    <div class="mb-3">
                        <label for="tel" class="form-label">{{ __('tahwissa.phone') }}</label>
                        <input type="tel" class="form-control" name="tel" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Bouton secondaire avec une couleur douce -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('tahwissa.close') }}</button>
                    <!-- Bouton de soumission avec une couleur dynamique -->
                    <button type="submit" class="btn btn-success">{{ __('tahwissa.confirm_reservation') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

