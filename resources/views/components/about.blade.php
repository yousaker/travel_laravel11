<div class="container-xxl py-5" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <!-- Titre "About Us" traduit -->
                <h6 class="section-title bg-white text-start text-primary pe-3">
                    {{ __('about.about_us') }}
                </h6>

                <!-- Titre "Welcome to Tourist" traduit -->
                <h1 class="mb-4">
                    {{ __('about.welcome') }} <span class="text-primary">Tourist</span>
                </h1>

                <!-- Descriptions traduites -->
                <p class="mb-4">{{ __('about.description_1') }}</p>
                <p class="mb-4">{{ __('about.description_2') }}</p>

                <!-- Liste des services traduits -->
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('about.first_class_flights') }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('about.handpicked_hotels') }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('about.five_star_accommodations') }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('about.latest_model_vehicles') }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('about.premium_city_tours') }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('about.service_24_7') }}</p>
                    </div>
                </div>

                <!-- Bouton "Read More" traduit -->
                <a class="btn btn-primary py-3 px-5 mt-2" href="">{{ __('about.read_more') }}</a>
            </div>
        </div>
    </div>
</div>
