
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Travel Agency')</title>

    <link href="img/favicon.ico" rel="icon">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

<!-- Bootstrap JS (avec Popper.js) -->

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal.css') }}" rel="stylesheet">
    <!-- Styles personnalisés pour le bouton -->

</head>
<body>

    @include('components.alert-success')
    @include('components.navbar')
    @include('components.login')
    @include('components.register')
    @include('components.add-tahwissa')
    @include('components.add-product')


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
    <div class="script">
        @yield('script')
    </div>
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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const reservationModal = document.getElementById('reservationModal');
    const reservationForm = document.getElementById('reservationForm');
    const reservationProductId = document.getElementById('reservationProductId');

    reservationModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const idProduit = button.getAttribute('data-id');
        reservationProductId.value = idProduit;
    });

    reservationForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(reservationForm);

        fetch('/reservation', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                const modal = bootstrap.Modal.getInstance(reservationModal);
                modal.hide();
                reservationForm.reset();
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue. Veuillez réessayer.');
            });
    });
});

</script>
</script>


</body>
</html>
