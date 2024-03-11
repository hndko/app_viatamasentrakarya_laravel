<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}" defer></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}" defer></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}" defer></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#success-alert').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000); // Hilangkan pesan sukses setelah 3 detik

        setTimeout(function() {
            $('#success-danger').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000); // Hilangkan pesan sukses setelah 3 detik
    });
</script>
