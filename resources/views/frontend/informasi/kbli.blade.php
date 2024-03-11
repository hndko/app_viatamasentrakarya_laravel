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

        <section class="inner-page">
            <div class="container" data-aos="fade-up">
                <div class="card mt-5 mb-5 border-0 section-bg">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= asset('assets/img/kbli-2020-new.jpg') ?>" class="img-fluid rounded lazyload"
                                alt="Panduan KBLI Terbaru">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title h2">Panduan KBLI Terbaru</h5>
                                <p class="card-text">
                                    Untuk mempermudah pelaku usaha menentukan kategori Bidang Usaha yang akan dikembangkan
                                    di
                                    Indonesia, pemerintah melalui Badan Pusat Statistik (BPS) menyusun Klasifikasi Baku
                                    Lapangan
                                    Usaha Indonesia (KBLI) sebagai panduan penentuan jenis kegiatan usaha/bisnis. Acuan ini
                                    diperbarui pada September 2020 sesuai dengan Peraturan BPS Nomor 2 Tahun 2020 tentang
                                    Klasifikasi Baku Lapangan Usaha Indonesia, dengan penambahan 216 kode KBLI 5 digit dari
                                    KBLI
                                    2017, sehingga total saat ini ada 1.790 kode KBLI.
                                </p>
                                <p class="card-text">
                                    KBLI adalah pengklasifikasian aktivitas/kegiatan ekonomi Indonesia yang menghasilkan
                                    produk/output, baik berupa barang maupun jasa, berdasarkan lapangan usaha untuk
                                    memberikan
                                    keseragaman konsep, definisi, dan klasifikasi lapangan usaha dalam perkembangan dan
                                    pergeseran kegiatan ekonomi di Indonesia.
                                </p>
                                <a href="{{ asset('assets/berkas/kbli-2020-new.pdf') }}"
                                    class="btn btn-primary btn-sm rounded-2 w-100" download>Download KBLI
                                    Terbaru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
