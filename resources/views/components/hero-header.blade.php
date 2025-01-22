<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <!-- Titre traduit -->
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    {{ __('navbar.enjoy_vacation') }}
                </h1>

                <!-- Description traduite -->
                <p class="fs-4 text-white mb-4 animated slideInDown">
                    {{ __('navbar.vacation_description') }}
                </p>

                <!-- Champ de recherche et bouton traduits -->
                <div class="position-relative w-75 mx-auto animated slideInDown">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="{{ __('navbar.search_placeholder') }}">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">
                        {{ __('navbar.search_button') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
