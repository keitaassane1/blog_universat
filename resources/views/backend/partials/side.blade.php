    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> BLOG Univ </div>
      </a>
      <hr class="sidebar-divider my-0">


      <li class="nav-item active">
            <a class="nav-link" href="@admin {{ route('admin.dashboard') }} @endadmin @auteur {{ route('auteur.dashboard') }} @endauteur">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">

       @admin
            @include('backend.admin.menu_admin')
        @endadmin

        @auteur
            @include('backend.auteur.menu_auteur')
        @endauteur

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
