


@extends('layouts.app')

@section('title', 'WZLCOME')

@section('content')
@include('components.hero-header')
@include('components.about')
@include('components.service')
@include('components.destination')
@include('components.tahwissa')
@include('components.produite')
    @include('components.hero')


@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('tahwissaModal');

        modal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;

            // Extract data from button attributes
            const titre = button.getAttribute('data-titre');
            const wilaya = button.getAttribute('data-wilaya');
            const adresse = button.getAttribute('data-adresse');
            const telephone = button.getAttribute('data-telephone');
            const prix = button.getAttribute('data-prix');
            const description = button.getAttribute('data-description');
            const image = button.getAttribute('data-image');
            const user = button.getAttribute('data-user');

            const nombreJours = button.getAttribute('data-nombre-jours');

            // Update modal content
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
@endsection
