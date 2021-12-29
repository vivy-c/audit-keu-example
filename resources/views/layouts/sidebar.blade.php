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
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
          Data PKA
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="../pka/index.php" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>PKA</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../pka/timeline.php" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Timeline Audit</p>
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
            <p>Data Desk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../visit/index.php" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Visit</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../tha/index.php" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>THA</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../lha/index.php" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>LHA</p>
          </a>
        </li>
      </ul>
    </li>

    
    <li class="nav-item ">
      <a href="../ba/index.php" class="nav-link ">
        <i class="nav-icon far fa-flag"></i>
        <p>
          Berita Acara
          <i class=""></i>
        </p>
      </a>
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