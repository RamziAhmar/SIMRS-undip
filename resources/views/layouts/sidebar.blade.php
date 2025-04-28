<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="/assets/dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ $page == 'dashboard' ? 'active' : null }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link {{ $page == 'rekam-medis' ? 'active' : null }}">
                        <i class="nav-icon bi bi-journal-text"></i>
                        <p>Rekam Medis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-archive"></i>
                        <p>
                            Master Data
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pasien" class="nav-link">
                                <i class="nav-icon bi bi-person-heart"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pendaftaran" class="nav-link">
                                <i class="nav-icon bi bi-card-checklist"></i>
                                <p>
                                    Pendaftaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="penanganan" class="nav-link">
                                <i class="nav-icon bi bi-journal-check"></i>
                                <p>Penanganan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/users" class="nav-link {{ $page == 'users' ? 'active' : null }}">
                        <i class="nav-icon bi bi-person"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
