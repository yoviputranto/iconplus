<!-- Sidebar -->
<ul class="navbar-nav bg-aliceblue sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="py-4 px-3 brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
  </div> -->
        <div class="brand">
            <img class="img-fluid" src="{{ asset('frontend') }}/img/dashboard-svg.svg" width="20px">
            Dashboard Icon+
        </div>
        <div class="brand-mobile">Icon+</div>
    </a>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::currentRouteName() == 'dashboard  ' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <img src="{{ asset('assets') }}/icons/home.png" alt="home" width="16px">
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <img src="{{ asset('assets') }}/icons/setting.png" alt="setting" width="16px">
            <span class="dropdown">Dropdown</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ Route::currentRouteName() == 'program' ? 'active' : '' }}">
        <a class="nav-link " href="{{ route('program') }}">
            <!-- <i class="fas fa-fw fa-table"></i> -->
            <img src="{{ asset('assets') }}/icons/form.png" alt="form" width="16px">
            <span>Program</span>
        </a>
    </li>
    <li class="nav-item {{ Route::currentRouteName() == 'proyek' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('proyek') }}">
            <!-- <i class="fas fa-fw fa-table"></i> -->
            <img src="{{ asset('assets') }}/icons/calendar.png" alt="form" width="16px">
            <span>Proyek</span>
        </a>
    </li>
    <li class="nav-item {{ Route::currentRouteName() == 'monitoring' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('monitoring') }}">
            <!-- <i class="fas fa-fw fa-table"></i> -->
            <img src="{{ asset('assets') }}/icons/monitor.png" alt="form" width="16px">
            <span>Monitoring</span>
        </a>
    </li>
    <li class="nav-item {{ Route::currentRouteName() == 'keuangan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('keuangan') }}">
            <!-- <i class="fas fa-fw fa-table"></i> -->
            <img src="{{ asset('assets') }}/icons/money.png" alt="form" width="16px">
            <span>Keuangan</span>
        </a>
    </li>
    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-3">
        <button class="rounded-circle bg-primary border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
