        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#106466">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-start" href="index.html">  
                <img class="img-fluid rounded-circle" src="{{ url('img/logo.png') }}" width="50">
                <div class="sidebar-brand-text ml-1 text-left">REKRUTMEN BEM UPI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{  (request()->segment(1) == '') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            @can('isUser')
            <li class="nav-item {{  (request()->segment(1) == 'profile') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('profile') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span></a>
            </li>

            <li class="nav-item {{  (request()->segment(1) == 'seleksi') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('selection') }}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Seleksi</span></a>
            </li>

            <li class="nav-item {{  (request()->segment(1) == 'status') ? 'active' : ''  }}">
                <a class="nav-link" href="{{ route('selection.result') }}">
                    <i class="fas fa-fw fa-check"></i>
                    <span>Status</span></a>
            </li>
            @endcan

            @can('isAdmin')
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
            @endcan

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->