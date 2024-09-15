<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('apps.dashboard') }}" class="brand-link">
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
            @if (Auth::check())
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->nama_lengkap }}</a>
                </div>
            @else
                <div class="info">
                    <a href="#" class="d-block">Administrator</a>
                </div>
            @endif
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('apps.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ $master === 'Master Data' ? 'show menu-open' : '' }}">
                    <a href="#" class="nav-link {{ $master === 'Master Data' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps.daftar_perusahaan') }}"
                                class="nav-link {{ $pages === 'Daftar Perusahaan' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Perusahaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('apps.percen_pajak') }}"
                                class="nav-link {{ $pages === 'Persen Pajak' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Persen Pajak</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('apps.virtual_office') }}"
                        class="nav-link {{ $pages === 'Virtual Office' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-laptop-house"></i>
                        <p>Virtual Office</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('apps.pendirian_perusahaan') }}"
                        class="nav-link {{ $pages === 'Pendirian Perusahaan' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Pendirian Perusahaan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('apps.space_office') }}"
                        class="nav-link {{ $pages === 'Space Office' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Space Office</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('apps.vendor') }}" class="nav-link {{ $pages === 'Vendor' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-people-arrows"></i>
                        <p>Vendor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('apps.hrga') }}" class="nav-link {{ $pages === 'HR & GA' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>HR GA</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('apps.kas') }}"
                        class="nav-link {{ $pages === 'Kas Kecil & Besar' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-funnel-dollar"></i>
                        <p>Kas Kecil & Besar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('apps.data_akun') }}"
                        class="nav-link {{ $pages === 'Data Akun' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Akun</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
