<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('template') }}/img/user/ttd_sasa aisha j.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">sasa aisha j</a>
            <span class="badge badge-info d-block">Ketua-SPI</span>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>


  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column mt-3" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->

      <li class="nav-item ">
        <a href="/" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class=""></i>
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-user"></i>
          <p>
            Data User
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../user/index.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../konfirmasi_user/index.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Konfirmasi User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../auditee/index.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Auditee</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-list-alt"></i>
          <p>
            Data Audit
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../desk/index.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>KKA</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item ">
        <a href="{{ asset('template') }}/logout.php" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
            Log Out
            <i class=""></i>
          </p>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>