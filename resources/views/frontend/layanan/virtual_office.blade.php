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
                                <h3>Virtual Office StartupPlans</h3>
                                <h4><sup>Rp</sup>3.488.000<span> Pertahun</span></h4>
                            </div>

                            <ul>
                                <li>
                                    <i class="bi bi-dot"></i> Penggunaan Alamat Bisnis
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Penggunaan Nomor Telepon
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Penerimaan Dan Pencatatan Surat Atau Dokumen Masuk
                                    Setiap
                                    Saat
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Pemberitahuan Pesan Masuk
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Harga Sudah Termasuk PPN 11%
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsa" class="buy-btn">Pesan
                                    Sekarang</a>
                                <div class="small mt-3 text-success fw-bold">
                                    Gratis! Layanan Pengiriman Surat (Jabodetabek)
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-item featured">
                            <div class="pricing-header">
                                <h3>Virtual Office CEOPlans</h3>
                                <h4><sup>Rp</sup>4.578.000<span> Pertahun</span></h4>
                            </div>
                            <ul>
                                <li>
                                    <i class="bi bi-dot"></i> Penggunaan Alamat Bisnis
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Penggunaan Nomor Telepon
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Penerimaan Dan Pencatatan Surat Atau Dokumen Masuk
                                    Setiap
                                    Saat
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Pemberitahuan Pesan Masuk
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Bebas Menggunakan Area Lobby
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Wifi Diarea Kantor
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Coffee Break
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Pemakaian Meeting Room 12jam/Bulan(Tidak Bisa Diakumulasi)
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Harga Sudah Termasuk PPN 11%
                                </li>
                            </ul>
                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsa" class="buy-btn">Pesan
                                    Sekarang</a>
                                <div class="small mt-3 text-success fw-bold">
                                    Gratis! Layanan Pengiriman Surat (Jabodetabek)
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item featured-red">
                            <div class="pricing-header">
                                <h3>Virtual Office SultanPlans</h3>
                                <h4><sup>Rp</sup>4.905.000<span> Pertahun</span></h4>
                            </div>
                            <ul>
                                <li>
                                    <i class="bi bi-dot"></i> Penggunaan Alamat Bisnis
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Penggunaan Nomor Telepon
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Penerimaan Dan Pencatatan Surat Atau Dokumen Masuk
                                    Setiap
                                    Saat
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Pemberitahuan Pesan Masuk
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Bebas Menggunakan Area Lobby
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Wifi Diarea Kantor
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Layanan Coffee Break
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Pemakaian Meeting Room 24jam/Bulan(Tidak Bisa Diakumulasi)
                                </li>
                                <li>
                                    <i class="bi bi-dot"></i> Harga Sudah Termasuk PPN 11%
                                </li>
                            </ul>
                            <div class="text-center mt-auto">
                                <a href="https://wa.me/213123213?text=asdsadsa" class="buy-btn">Pesan
                                    Sekarang</a>
                                <div class="small mt-3 text-success fw-bold">
                                    Gratis! Layanan Pengiriman Surat (Jabodetabek)
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>
@endsection
