        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-start" href="index.html">
                <div class="sidebar-brand-text mx-3">BEM AHP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{  (request()->segment(1) == '/') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item {{  (request()->segment(1) == 'alternatif') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('alternatif.index') }}">
                    <i class="fas fa-fw fa-trophy"></i>
                    <span>Alternatif</span></a>
            </li>

            <li class="nav-item {{  (request()->segment(1) == 'kriteria') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('kriteria.index') }}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Kriteria</span></a>
            </li>

            <li class="nav-item {{  (request()->segment(1) == 'bobot') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('bobot.index') }}">
                    <i class="fas fa-fw fa-percentage"></i>
                    <span>Nilai Bobot</span></a>
            </li>

            <li class="nav-item {{  (request()->segment(1) == 'perhitungan') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('perhitungan.index') }}">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Perhitungan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->