<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">MENU</div>

                <!-- Sidenav Link (Charts)-->
                <a class="nav-link {{ set_active('dashboard') }}" href="{{ route('dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ set_active('sekolah') }}" href="{{ route('sekolah') }}">
                    <div class="nav-link-icon"><i data-feather="shield"></i></div>
                    Sekolah
                </a>
                <!-- Sidenav Link (Charts)-->
                <a class="nav-link" href="charts.html">
                    <div class="nav-link-icon"><i data-feather="bar-chart-2"></i></div>
                    Anggaran
                </a>
                <!-- Sidenav Link (Charts)-->
                <a class="nav-link" href="charts.html">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    Pengguna
                </a>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                    Laporan
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="dashboard-1.html">
                            Rekap Belanja
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Valerie Luna</div>
            </div>
        </div>
    </nav>
</div>
