a
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis</title>
    <meta
        content="Pemberi layanan kantor virtual dan bisnis - PT Viatama Sentrakarya. Ahli dalam pendirian perusahaan, sertifikasi badan usaha, dan lainnya."
        name="description" />
    <meta content="kantor virtual, pendirian perusahaan, sertifikasi badan usaha, layanan bisnis" name="keywords" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />

    <!-- Google Fonts -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow" />
    <meta name="author" content="PT Viatama Sentrakarya" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <!-- Tautan Kanonikal -->
    <link rel="canonical" href="{{ route('/') }}" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis" />
    <meta property="og:description"
        content="Pemberi layanan kantor virtual dan bisnis - PT Viatama Sentrakarya. Ahli dalam pendirian perusahaan, sertifikasi badan usaha, dan lainnya." />
    <meta property="og:image" content="{{ asset('assets/img/favicon.png') }}" />
    <meta property="og:url" content="{{ route('/') }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis" />
    <meta name="twitter:description"
        content="Pemberi layanan kantor virtual dan bisnis - PT Viatama Sentrakarya. Ahli dalam pendirian perusahaan, sertifikasi badan usaha, dan lainnya." />
    <meta name="twitter:image" content="{{ asset('assets/img/favicon.png') }}" />

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        .bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            25%,
            50%,
            75%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-12px);
            }
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top bg-white">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Viatama Sentrakarya" />
            </a>

            <nav id=" navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto" href="">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <span>About</span><i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Galery</a></li>
                            <li>
                                <a href="">Syarat & Ketentuan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Layanan</span><i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="">Pendirian Perusahaan</a>
                            </li>
                            <li><a href="">Sertifikasi Badan Usaha</a>
                            </li>
                            <li>
                                <a href="">Virtual Office</a>
                            </li>
                            <li>
                                <a href="">Space Office</a>
                            </li>
                            <li><a href="">Outsourcing Security</a></li>
                            <li><a href="">Layanan Tambahan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Informasi</span><i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="">KBLI Terbaru</a>
                            </li>
                            <li>
                                <a href="">Cek Zonasi</a>
                            </li>
                            <li><a href="{{ url('404') }}">Karir</a></li>
                            <li>
                                <a href="">Hubungi Kami</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none mt-3"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center lazyload"></section>

    <main id="main">
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="section-header">
                    <h2>PILIH LAYANAN KEBUTUHAN ANDA</h2>
                </div>

                <div class="row gy-1">
                    <div class="col-xl-4 col-md-6 col-sm-1" data-aos="zoom-out">
                        <div class="service-item">
                            <div class="icon text-center">
                                <i class="bi bi-activity icon"></i>
                            </div>
                            <h4 class="text-center">
                                <a href="" class="stretched-link">Pendirian
                                    Perusahaan</a>
                            </h4>
                            <ul>
                                <li><i class="bx bx-check"></i> PT Perorangan</li>
                                <li><i class="bx bx-check"></i> PT</li>
                                <li><i class="bx bx-check"></i>CV</li>
                                <li><i class="bx bx-check"></i>PMA</li>
                                <li><i class="bx bx-check"></i>Yayasan</li>
                                <li><i class="bx bx-check"></i>Firma</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-1" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item">
                            <div class="icon text-center">
                                <i class="bi bi-bounding-box-circles icon"></i>
                            </div>
                            <h4 class="text-center">
                                <a href="" class="stretched-link">Setifikasi Badan Usaha</a>
                            </h4>
                            <ul>
                                <li><i class="bx bx-check"></i> SBUJK</li>
                                <li><i class="bx bx-check"></i> SBUJPTL</li>
                                <li><i class="bx bx-check"></i> SMK3 Kemnaker</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-1" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item">
                            <div class="icon text-center">
                                <i class="bi bi-calendar4-week icon"></i>
                            </div>
                            <h4 class="text-center">
                                <a href="" class="stretched-link">Layanan
                                    Lainnya</a>
                            </h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Perubahaan Akta</li>
                                <li>
                                    <i class="bx bx-check"></i> Izin OSS (NIB & Sertifikat Standar)
                                </li>
                                <li><i class="bx bx-check"></i> Visa & KITAS</li>
                                <li><i class="bx bx-check"></i> Pendaftaran HAKI</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">
                <div class="clients-slider swiper" style="cursor: pointer">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($images as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/' . basename($image)) }}" class="img-fluid"
                                    alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>
                </div>
            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.230892277939!2d106.918033!3d-6.248515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d1699e65ea5%3A0xb28b523fd4806b88!2sViatama%20Ideal%20Business!5e0!3m2!1sid!2sid!4v1703609037999!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-5">
                        <div class="info" style="padding-bottom: 60px">
                            <h3>Contact Us</h3>

                            <div class="info-item">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>
                                        <!-- ptviatamasentrakarya@gmail.com <br>
                                    idealbusinessjakarta@gmail.com -->
                                        admin@viatama.co.id <br>
                                        cs@viatama.co.id
                                    </p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>
                                        021 2853-7846 <br />
                                        0821-1616-9922
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/logo-portrait-2.png') }}"
                                    alt="Logo Viatama Sentrakarya" width="250px" height="300px" />
                            </div>
                            <div class="mt-4">
                                <strong>Email Utama:</strong> admin@viatama.co.id
                                <br />
                                <strong>Phone:</strong> 021 2853-7846
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Navigation</h4>
                        <ul class="fs-6">
                            <li class="mb-3"><i class="bx bx-chevron-right"></i><a href=""
                                    class="text-white">Layanan</a></li>
                            <li class="mb-3"><i class="bx bx-chevron-right"></i><a href=""
                                    class="text-white">Galery</a></li>
                            <li class="mb-3"><i class="bx bx-chevron-right"></i><a href=""
                                    class="text-white">Kantor</a></li>
                            <li class="mb-3">
                                <i class="bx bx-chevron-right"></i><a href=""
                                    class="text-white">Perusahaan</a>
                            </li>
                            <li class="mb-3">
                                <i class="bx bx-chevron-right"></i><a href="" class="text-white">Artikel</a>
                            </li>
                            <li class="mb-3"><i class="bx bx-chevron-right"></i><a href=""
                                    class="text-white">Kontak</a></li>
                            <li class="mb-3">
                                <i class="bx bx-chevron-right"></i><a href="" class="text-white">Kebijakan</a>
                            </li>
                            <li class="mb-3">
                                <i class="bx bx-chevron-right"></i><a href="" class="text-white">Syarat &
                                    Ketentuan</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>DKI Jakarta</h4>
                        <p class="fs-6 text-capitalize">
                            JL. Manunggal Pratama No.8 RT011/RW06 Cipinang Melayu. Makasar
                            Jakarta Timur 13620
                        </p>
                        <div class="mb-3">
                            <strong>Email Utama:</strong> admin@viatama.co.id
                            <strong>Phone:</strong> 021 2853-7846
                        </div>
                        <div class="mb-3">
                            <strong>Email VO/SO:</strong> cs@viatama.co.id
                            <strong>Whatsapp:</strong> 0821-1616-9922
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Tangerang</h4>
                        <p class="fs-6 text-capitalize">
                            Kawasan Industri Benua Permai Lestari, Jl. Raya Serang Desa No.Km. 25, 6, Cisereh, Kec.
                            Tigaraksa, Kabupaten Tangerang, Banten 15720
                        </p>
                        <h4>Bekasi</h4>
                        <p class="fs-6 text-capitalize">
                            Kawasan industri Jababeka 1, jln Jababeka raya blok V no 59.
                            Cikarang, Bekasi 10220
                        </p>
                        <h4>Jepara</h4>
                        <p class="fs-6 text-capitalize">
                            Jln kudus jepara km 21, Desa sengonbugel Rt 01 Rw 01, Kec. Mayong kabupaten jepara 59465
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div class="container">
                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
                    <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
                    <a href="https://www.instagram.com/viatama.co.id/" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a> -->
                    <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
                </div>

                <div class="copyright">
                    &copy; Copyright <strong><span>PT Viatama Sentrakarya</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/213123213?text=asdsadsad" class="float bounce" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}" defer></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" defer></script>
</body>

</html>
