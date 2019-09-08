      <!-- Heading -->
      <div class="sidebar-heading">
            Gestions des utilisateurs
          </div>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-fw fa-users"></i>
              <span>Utilisateurs</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.liste_roles')  }}">
            <i class="fas fa-shield-alt"></i>
            <span>Roles</span></a>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            Gestion des Articles
          </div>
         <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.liste_categories')}}">
              <i class="fas fa-fw fa-list"></i>
              <span>Categories</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.posts') }}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Articles</span></a>
          </li>
