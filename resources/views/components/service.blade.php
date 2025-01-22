<div class="container-xxl py-5" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <!-- Titre "Services" traduit -->
            <h6 class="section-title bg-white text-center text-primary px-3">
                {{ __('services.services') }}
            </h6>

            <!-- Titre "Our Services" traduit -->
            <h1 class="mb-5">{{ __('services.our_services') }}</h1>
        </div>
        <div class="row g-4">
            <!-- Service 1 : WorldWide Tours -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5>{{ __('services.worldwide_tours') }}</h5>
                        <p>{{ __('services.worldwide_tours_description') }}</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 : Hotel Reservation -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                        <h5>{{ __('services.hotel_reservation') }}</h5>
                        <p>{{ __('services.hotel_reservation_description') }}</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 : Travel Guides -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>{{ __('services.travel_guides') }}</h5>
                        <p>{{ __('services.travel_guides_description') }}</p>
                    </div>
                </div>
            </div>

            <!-- Service 4 : Event Management -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5>{{ __('services.event_management') }}</h5>
                        <p>{{ __('services.event_management_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
