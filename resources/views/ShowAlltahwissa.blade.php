@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
@include('components.hero-header')

@include('components.tahwissa')
<!-- Bouton "Voir plus" -->
<div class="text-center mt-4">
    <button id="loadMoreBtn" class="btn btn-primary">Voir plus</button>
</div>
<div style=" height: 50px;">

</div>
    @include('components.hero')


@endsection
@section('script')
<script>
    $(document).ready(function () {
        let offset = 6; // Nombre d'éléments déjà affichés
        const limit = 3; // Nombre d'éléments à charger à chaque clic

        $('#loadMoreBtn').click(function () {
            $.ajax({
                url: "{{ route('load.more.tahwiss') }}",
                type: "GET",
                data: {
                    offset: offset,
                    limit: limit
                },
                success: function (response) {
                    if (response.length > 0) {
                        // Ajouter les nouveaux éléments à la liste
                        response.forEach(function (tahwissa) {
                            let html = `
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="package-item" style="border: 1px solid #ddd; border-radius: 15px; overflow: hidden; background-color: #FAFAFA;">
                                        <div class="overflow-hidden" style="height: auto; text-align: center;">
                                            <img class="img-fluid"
                                                 src="{{ asset('storage/') }}/${tahwissa.image_tahwissa}"
                                                 alt="${tahwissa.titre}"
                                                 style="width: 100%; height: 350px; display: inline-block; border-radius: 10px;">
                                        </div>
                                        <div class="d-flex border-bottom" style="background-color: #F4F4F4;">
                                            <small class="flex-fill text-center border-end py-2" style="font-size: 22px; color: #121212;">
                                                <i class="fa fa-map-marker-alt me-2"></i>
                                                ${tahwissa.wilaya}
                                            </small>
                                            <small class="flex-fill text-center border-end py-2" style="font-size: 22px; color: #0d0d0c;">
                                                <i class="fa fa-calendar-alt me-2"></i>
                                                ${tahwissa.nombre_de_jours} jours
                                            </small>
                                            <small class="flex-fill text-center py-2" style="font-size: 22px; color: #020202;">
                                                <i class="fa fa-user me-2"></i>
                                                ${tahwissa.user.name}
                                            </small>
                                        </div>
                                        <div class="text-center p-4">
                                            <h3 class="mb-0" style="color: #264653;">$${tahwissa.prix}</h3>
                                            <div class="mb-3">
                                                <small class="fa fa-star" style="color: #E9C46A;"></small>
                                                <small class="fa fa-star" style="color: #E9C46A;"></small>
                                                <small class="fa fa-star" style="color: #E9C46A;"></small>
                                                <small class="fa fa-star" style="color: #E9C46A;"></small>
                                                <small class="fa fa-star" style="color: #E9C46A;"></small>
                                            </div>
                                            <p style="color: #6C757D;">${tahwissa.petite_description}</p>
                                            <p style="color: #6C757D;"> Téléphone : ${tahwissa.numero_telephone}</p>
                                            <div class="d-flex justify-content-center mb-2">
                                                <button class="btn btn-sm px-3 border-end btn-custom-dark"
                                                        style="border-radius: 30px 0 0 30px; border-color: #264653;"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#tahwissaModal"
                                                        data-titre="${tahwissa.titre}"
                                                        data-wilaya="${tahwissa.wilaya}"
                                                        data-adresse="${tahwissa.adresse}"
                                                        data-telephone="${tahwissa.numero_telephone}"
                                                        data-prix="${tahwissa.prix}"
                                                        data-description="${tahwissa.description}"
                                                        data-image="{{ asset('storage/') }}/${tahwissa.image_tahwissa}"
                                                        data-user="${tahwissa.user.name}"
                                                        data-categorie="${tahwissa.category.nom}"
                                                        data-nombre-jours="${tahwissa.nombre_de_jours}">
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
                        $('#loadMoreBtn').hide();
                    }
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('tahwissaModal');

        modal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;

            // Extract data from button attributes
            const titre = button.getAttribute('data-titre');
            const titre1 = button.getAttribute('data-titre1');

            const wilaya = button.getAttribute('data-wilaya');
            const adresse = button.getAttribute('data-adresse');
            const telephone = button.getAttribute('data-telephone');
            const prix = button.getAttribute('data-prix');
            const description = button.getAttribute('data-description');
            const image = button.getAttribute('data-image');
            const user = button.getAttribute('data-user');

            const nombreJours = button.getAttribute('data-nombre-jours');

            // Update modal content
            document.getElementById('modalTitle1').textContent = titre1;
            document.getElementById('modalTitle').textContent = titre;
            document.getElementById('modalWilaya').textContent = wilaya;
            document.getElementById('modalAdresse').textContent = adresse;
            document.getElementById('modalTelephone').textContent = telephone;
            document.getElementById('modalPrix').textContent = prix;
            document.getElementById('modalDescription').textContent = description;
            document.getElementById('modalImage').src = image;
            document.getElementById('modalUser').textContent = user;

            document.getElementById('modalNombreJours').textContent = nombreJours;

            // Optional: Add event to the "Réserver" button
            document.getElementById('bookNowBtn').addEventListener('click', function() {
                alert('Réservation effectuée pour ' + titre);
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion du modal de réservation
        $('#reservationModal').on('show.bs.modal', function(event) {
            const button = $(event.relatedTarget);
            const tahwessaId = button.data('tahwessa-id');
            $('#reservationTahwessaId').val(tahwessaId);
        });
    });
    </script>

@endsection
