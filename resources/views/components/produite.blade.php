<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Produits</h6>
            <h1 class="mb-5">Nos Produits</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden" style="height: auto; text-align: center;">
                        @if($product->images)
                            <img class="img-fluid"
                                 src="{{ asset('storage/' . $product->images) }}"
                                 alt="{{ $product->name }}"
                                 style="
                                     width: 100%;
                                     height: 350px;
                                     display: inline-block;
                                     border-radius: 10px;">
                        @else
                            <img class="img-fluid"
                                 src="{{ asset('path/to/default/image.jpg') }}"
                                 alt="Image par défaut"
                                 style="
                                     width: 100%;
                                     height: 350px;
                                     display: inline-block;
                                     border-radius: 10px;">
                        @endif
                    </div>

                    <div class="d-flex border-bottom align-items-center py-2">
                        <small class="flex-fill text-center border-end px-3" style="    font-size: 22px;">
                            <i class="fa fa-tag fa-map-marker-alt me-2"></i>
                            {{ $product->name }}
                        </small>
                        <small class="flex-fill text-center py-2" style="font-size: 22px; color: #020202;">
                            <i class="fa fa-user me-2"></i>
                            {{ $product->user->name ?? 'Anonyme' }}
                        </small>
                    </div>

                    <div class="text-center p-4">
                        <h3 class="mb-0">${{ number_format($product->prix, 2) }}</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>{{ $product->description }}</p>
                        <p>Téléphone : {{ $product->telephone }}</p>
                        <div class="d-flex justify-content-center mb-2">

                            <button
    class="btn btn-sm px-3 border-end btn-custom-dark"
    style="border-radius: 30px 0 0 30px; border-color: #264653;"
    data-bs-toggle="modal"
    data-bs-target="#productModal"
    data-name="{{ $product->name }}"
    data-prix="{{ number_format($product->prix, 2) }}"
    data-description="{{ $product->description }}"
    data-image="{{ $product->images ? asset('storage/' . $product->images) : asset('path/to/default/image.jpg') }}"
    data-user="{{ $product->user->name ?? 'Anonyme' }}"
    data-telephone="{{ $product->telephone }}"
>
    Read More
</button>
                            <button
                              class="btn btn-sm px-3 btn-custom-light"
                              style="border-radius: 0 30px 30px 0;"
                            >
                              Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 15px; border: none;">
            <div class="modal-header" style="background: #2A9D8F; border-bottom: 3px solid #264653;">
                <h5 class="modal-title" id="productModalLabel" style="color: white; font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: 600;">
                    <i class="fas fa-info-circle me-2"></i>Détails du Produit
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" style="font-family: 'Open Sans', sans-serif;">
                <img id="modalProductImage" src=""
                     class="img-fluid rounded mb-4 shadow-sm"
                     alt="Image du Produit"
                     style="max-height: 400px; width: 100%; object-fit: cover; border: 2px solid #e9ecef;">

                <h3 id="modalProductName" class="mb-4" style="color: #264653; font-size: 2rem; font-family: 'Poppins', sans-serif; font-weight: 700;"></h3>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="info-item mb-3">
                            <i class="fa fa-user me-2" style="color: #2A9D8F; width: 25px;"></i>
                            <span style="color: #4a4a4a; font-size: 1.1rem;">Vendeur: </span>
                            <span id="modalProductUser" style="color: #264653; font-weight: 600;"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-item mb-3">
                            <i class="fa fa-wallet me-2" style="color: #2A9D8F; width: 25px;"></i>
                            <span style="color: #4a4a4a; font-size: 1.1rem;">Prix: </span>
                            $<span id="modalProductPrice" style="color: #264653; font-weight: 600;"></span>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 style="color: #2A9D8F; font-size: 1.4rem; font-family: 'Poppins', sans-serif; border-bottom: 2px solid #e9ecef; padding-bottom: 0.5rem;">
                        <i class="fas fa-align-left me-2"></i>Description
                    </h5>
                    <p id="modalProductDescription" style="color: #6c757d; font-size: 1.1rem; line-height: 1.7;"></p>
                </div>

                <div class="info-item mb-3">
                    <i class="fa fa-phone me-2" style="color: #2A9D8F; width: 25px;"></i>
                    <span id="modalProductTelephone" style="color: #4a4a4a; font-size: 1.1rem;"></span>
                </div>
            </div>

            <div class="modal-footer" style="border-top: 2px solid #e9ecef;">
                <button type="button"
                        class="btn btn-lg px-4"
                        style="background: #f8f9fa; color: #6c757d; border: 1px solid #dee2e6;"
                        data-bs-dismiss="modal">
                    Fermer
                </button>
                <button type="button"
                        class="btn btn-lg px-4"
                        id="bookProductBtn"
                        style="background: #2A9D8F; color: white; border: none;">
                    Acheter
                </button>
            </div>
        </div>
    </div>
</div>
