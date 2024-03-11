@extends('frontend.layout.app')
@section('content')
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
                                <img src="{{ asset('assets/img/clients/' . $image->sampul) }}" class="img-fluid"
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
@endsection
