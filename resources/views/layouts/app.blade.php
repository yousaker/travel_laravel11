
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Travel Agency')</title>

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<<<<<<< HEAD
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
=======
>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d

<!-- Bootstrap JS (avec Popper.js) -->

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Styles personnalisés pour le bouton -->

</head>
<body>

<<<<<<< HEAD

=======
>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d
    @include('components.navbar')
    @include('components.hero-header')
    @include('components.about')
    @include('components.service')
    @include('components.destination')
    @include('components.tahwissa')
    @include('components.produite')
    <div class="content">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const navbarCollapse = document.getElementById('navbarCollapse');

            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (navbarCollapse.classList.contains('show')) {
                        new bootstrap.Collapse(navbarCollapse).hide();
                    }
                });
            });
        });
<<<<<<< HEAD

document.addEventListener("DOMContentLoaded", function () {
    const successAlert = document.getElementById("success-alert");
    if (successAlert) {
        // إخفاء الرسالة بعد 3 ثوانٍ
        setTimeout(() => {
            successAlert.classList.remove("show"); // إزالة كلاس show
            successAlert.classList.add("fade"); // إضافة كلاس fade للإخفاء
            setTimeout(() => successAlert.remove(), 500); // إزالة العنصر تمامًا بعد انتهاء التأثير
        }, 3000); // زمن العرض بالميلي ثانية
    }
});

    </script>
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
=======
>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d
    </script>


</body>
</html>
