<header id="header" class="header fixed-top bg-white">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Viatama Sentrakarya" />
        </a>

        <nav id=" navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto" href="{{ route('/') }}">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>About</span><i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li>
                            <a href="{{ route('syarat-dan-ketentuan') }}">Syarat & Ketentuan</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Layanan</span><i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('pendirian-perusahaan') }}">Pendirian Perusahaan</a>
                        </li>
                        <li><a href="{{ route('sertifikasi-badan-usaha') }}">Sertifikasi Badan Usaha</a>
                        </li>
                        <li>
                            <a href="{{ route('virtual-office') }}">Virtual Office</a>
                        </li>
                        <li>
                            <a href="{{ route('space-office') }}">Space Office</a>
                        </li>
                        <li><a href="{{ route('outsourcing-security') }}">Outsourcing Security</a></li>
                        <li><a href="{{ route('layanan-tambahan') }}">Layanan Tambahan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Informasi</span><i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('kbli') }}">KBLI Terbaru</a>
                        </li>
                        <li>
                            <a href="{{ route('cek-zonasi') }}">Cek Zonasi</a>
                        </li>
                        <li><a href="{{ route('karir') }}">Karir</a></li>
                        <li>
                            <a href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none mt-3"></i>
        </nav>
    </div>
</header>
