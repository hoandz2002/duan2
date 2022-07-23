<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{PUBLIC_URL}}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Admin</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{BASE_URL . 'mon-hoc'}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Môn học
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{BASE_URL . 'quiz'}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Quizs
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{BASE_URL . 'mon-hoc'}}" class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            Tài khoản
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>