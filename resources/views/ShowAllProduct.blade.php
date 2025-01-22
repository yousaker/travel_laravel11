@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
@include('components.hero-header')

@include('components.produite')
<!-- Bouton "Voir plus" -->
<div class="text-center mt-4">
    <button id="loadMoreProductsBtn" class="btn btn-primary">Voir plus</button>
</div>
<div style=" height: 50px;">

</div>
    @include('components.hero')


@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        let offset = 6; // Nombre d'éléments déjà affichés
        const limit = 3; // Nombre d'éléments à charger à chaque clic

        $('#loadMoreProductsBtn').click(function () {
            $.ajax({
                url: "{{ route('load.more.products') }}",
                type: "GET",
                data: {
                    offset: offset,
                    limit: limit
                },
                success: function (response) {
                    if (response.length > 0) {
                        // Ajouter les nouveaux produits à la liste
                        response.forEach(function (product) {
                            let html = `
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="package-item">
                                        <div class="overflow-hidden" style="height: auto; text-align: center;">
                                            ${product.images ?
                                                `<img class="img-fluid"
                                                     src="{{ asset('storage/') }}/${product.images}"
                                                     alt="${product.name}"
                                                     style="width: 100%; height: 350px; display: inline-block; border-radius: 10px;">` :
                                                `<img class="img-fluid"
                                                     src="{{ asset('path/to/default/image.jpg') }}"
                                                     alt="Image par défaut"
                                                     style="width: 100%; height: 350px; display: inline-block; border-radius: 10px;">`
                                            }
                                        </div>
                                        <div class="d-flex border-bottom align-items-center py-2">
                                            <small class="flex-fill text-center border-end px-3" style="font-size: 22px;">
                                                <i class="fa fa-tag fa-map-marker-alt me-2"></i>
                                                ${product.name}
                                            </small>
                                            <small class="flex-fill text-center py-2" style="font-size: 22px; color: #020202;">
                                                <i class="fa fa-user me-2"></i>
                                                ${product.user ? product.user.name : 'Anonyme'}
                                            </small>
                                        </div>
                                        <div class="text-center p-4">
                                            <h3 class="mb-0">$${product.prix}</h3>
                                            <div class="mb-3">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                            <p>${product.description}</p>
                                            <p>Téléphone : ${product.telephone}</p>
                                            <div class="d-flex justify-content-center mb-2">
                                                <button class="btn btn-sm px-3 border-end btn-custom-dark"
                                                        style="border-radius: 30px 0 0 30px; border-color: #264653;"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#productModal"
                                                        data-name="${product.name}"
                                                        data-prix="${product.prix}"
                                                        data-description="${product.description}"
                                                        data-image="${product.images ? '{{ asset('storage/') }}/' + product.images : '{{ asset('path/to/default/image.jpg') }}'}"
                                                        data-user="${product.user ? product.user.name : 'Anonyme'}"
                                                        data-telephone="${product.telephone}">
                                                    Read More
                                                </button>
                                                <button class="btn btn-sm px-3 btn-custom-light"
                                                        style="border-radius: 0 30px 30px 0;">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            $('.row.g-4.justify-content-center').append(html);
                        });

                        offset += limit; // Mettre à jour l'offset
                    } else {
                        // Masquer le bouton "Voir plus" s'il n'y a plus d'éléments à charger
                        $('#loadMoreProductsBtn').hide();
                    }
                }
            });
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const productModal = document.getElementById('productModal');

    productModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;

        const name = button.getAttribute('data-name');
        const prix = button.getAttribute('data-prix');
        const description = button.getAttribute('data-description');
        const image = button.getAttribute('data-image');
        const user = button.getAttribute('data-user');
        const telephone = button.getAttribute('data-telephone');

        document.getElementById('modalProductName').textContent = name;
        document.getElementById('modalProductPrice').textContent = prix;
        document.getElementById('modalProductDescription').textContent = description;
        document.getElementById('modalProductImage').src = image;
        document.getElementById('modalProductUser').textContent = user;
        document.getElementById('modalProductTelephone').textContent = telephone;

        document.getElementById('bookProductBtn').addEventListener('click', function() {
            alert('Achat effectué pour ' + name);
        });
    });
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Quand le bouton "Book Now" est cliqué
    const reservationButtons = document.querySelectorAll('[data-bs-target="#reservationModal"]');

    reservationButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Récupérer les informations du bouton
            const productId = button.getAttribute('data-id');
            const productName = button.getAttribute('data-name');

            // Mettre à jour le champ caché pour le produit
            document.getElementById('reservationProductId').value = productId;

            // Vous pouvez aussi mettre à jour d'autres champs si nécessaire
            document.getElementById('name').value = ''; // Vidage des champs
            document.getElementById('prenom').value = '';
            document.getElementById('tel').value = '';
        });
    });
});

</script>
@endsection
