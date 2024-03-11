<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('cms.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/img/favicon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Viatama Sentrakarya</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('cms.dashboard') }}" class="d-block">Administrator</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('cms.dashboard') }}"
                        class="nav-link {{ $pages === 'Dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cms.klien') }}" class="nav-link {{ $pages === 'Klien' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Klien</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cms.about') }}" class="nav-link {{ $pages === 'Tentang Kami' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cms.gallery') }}" class="nav-link {{ $pages === 'Gallery' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cms.snk') }}"
                        class="nav-link {{ $pages === 'Syarat & Ketentuan' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Syarat & Ketentuan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Layanan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pendirian Perusahaan</p>
                            </a>
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Virtual Office</p>
                            </a>
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Space Office</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ $master === 'Informasi' ? 'show menu-open' : '' }}">
                    <a href="#" class="nav-link {{ $master === 'Informasi' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Informasi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cms.kbli') }}"
                                class="nav-link {{ $pages === 'KBLI Terbaru' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>KBLI</p>
                            </a>
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kotak Masuk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Layanan Home Page</p>
                            </a>
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengaturan Umum</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
