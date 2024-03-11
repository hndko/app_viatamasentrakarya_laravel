@extends('frontend.layout.app')
@section('content')
    <main id="main">
        <div class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2><?= $pages ?></h2>
                    <ol>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li><?= $pages ?></li>
                    </ol>
                </div>
            </div>
        </div>

        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item featured-teal">
                            <div class="pricing-header">
                                <h3>PT Perorangan + Izin</h3>
                                <!-- <h4><sup>Rp</sup>2.500.000</h4> -->
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i> Pendaftaran Nama PT Perorangan</li>
                                <li><i class="bi bi-dot"></i>Pernyataan Pendirian</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-item featured">
                            <div class="pricing-header">
                                <h3>PT Perorangan + Izin + VO</h3>
                                <!-- <h4><sup>Rp</sup>5.988.000</h4> -->
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Pendaftaran Nama PT Perorangan</li>
                                <li><i class="bi bi-dot"></i>Pernyataan Pendirian</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li>
                                    <i class="bi bi-dot"></i>Virtual Office StartupPlans di Viatama
                                    Sentrakarya
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured-red">
                            <div class="pricing-header">
                                <h3>PT + Izin</h3>
                                <!-- <h4><sup>Rp</sup>5.000.000</h4> -->
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="card-subtitle mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Akta Pendirian</li>
                                <li><i class="bi bi-dot"></i>SK Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured-teal">
                            <div class="pricing-header">
                                <h3>PT + Izin + VO</h3>
                                <!-- <h4><sup>Rp</sup>8.488.000</h4> -->
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="card-subtitle mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Akta Pendirian</li>
                                <li><i class="bi bi-dot"></i>SK Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li>
                                    <i class="bi bi-dot"></i>Virtual Office StartupPlans di Viatama
                                    Sentrakarya
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured">
                            <div class="pricing-header">
                                <h3>CV + Izin</h3>
                                <!-- <h4><sup>Rp</sup>3.500.000</h4> -->
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="card-subtitle mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Akta Pendirian</li>
                                <li><i class="bi bi-dot"></i>Pengesahan Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured-red">
                            <div class="pricing-header">
                                <h3>CV + Izin + VO</h3>
                                <!-- <h4><sup>Rp</sup>5.770.000</h4> -->
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="card-subtitle mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Akta Pendirian</li>
                                <li><i class="bi bi-dot"></i>Pengesahan Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li>
                                    <i class="bi bi-dot"></i>Virtual Office StartupPlans di Viatama
                                    Sentrakarya
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured-teal">
                            <div class="pricing-header">
                                <h3>PT Perorangan + Izin + Website</h3>
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="card-subtitle mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Akta Pendirian</li>
                                <li><i class="bi bi-dot"></i>SK Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li><i class="bi bi-dot"></i>Website Bisnis Premium</li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured">
                            <div class="pricing-header">
                                <h3>PT + Izin + Website</h3>
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="card-subtitle mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Akta Pendirian</li>
                                <li><i class="bi bi-dot"></i>SK Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li><i class="bi bi-dot"></i>Website Bisnis Premium</li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured-red">
                            <div class="pricing-header">
                                <h3>CV + Izin + Website</h3>
                            </div>

                            <ul>
                                <p style="font-size: 13px" class="card-subtitle mb-2 text-muted">
                                    Dokumen yang didapat :
                                </p>
                                <li><i class="bi bi-dot"></i>Akta Pendirian</li>
                                <li><i class="bi bi-dot"></i>Pengesahan Menkumham RI</li>
                                <li><i class="bi bi-dot"></i>NPWP Perusahaan</li>
                                <li><i class="bi bi-dot"></i>NIB OSS RBA Terbaru</li>
                                <li><i class="bi bi-dot"></i>Sertifikat Standar</li>
                                <li><i class="bi bi-dot"></i>Website Bisnis Premium</li>
                                <li>
                                    <i class="bi bi-dot"></i>Gratis Pendaftaran Izin Ekspor-Impor
                                    (API-NIK)
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsad" class="buy-btn">Contact
                                    Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
