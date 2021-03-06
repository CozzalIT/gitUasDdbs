<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo URL; ?>public/images/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="#HIMATIF" class="simple-text logo-normal">
      SI - PERPUSTAKAAN
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <?php if (Session::get('loggedIn') == true):?>
        <li class="nav-item <?php if (Session::get('page') == 'dashboard') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'member') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>member">
            <i class="material-icons">recent_actors</i>
            <p>Member</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'buku') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>buku">
            <i class="material-icons">book</i>
            <p>buku</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'peminjaman') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>peminjaman">
            <i class="material-icons">content_paste</i>
            <p>Peminjaman</p>
          </a>
        </li>
        <li class="nav-item <?php if (Session::get('page') == 'petugas') echo 'active'; ?> ">
          <a class="nav-link" href="<?php echo URL; ?>petugas">
            <i class="material-icons">supervisor_account</i>
            <p>Petugas</p>
          </a>
        </li>
        <?php if (Session::get('idCabang') == null): ?>
          <li class="nav-item <?php if (Session::get('page') == 'akun') echo 'active'; ?> ">
            <a class="nav-link" href="<?php echo URL; ?>akun">
              <i class="material-icons">person</i>
              <p>Pengaturan Akun</p>
            </a>
          </li>
          <li class="nav-item <?php if (Session::get('page') == 'cabang') echo 'active'; ?> ">
            <a class="nav-link" href="<?php echo URL; ?>cabang">
              <i class="material-icons">location_ons</i>
              <p>Cabang</p>
            </a>
          </li>
        <?php endif; ?>
      <?php else: ?>
        <li class="nav-item <?php if (Session::get('page') == 'index') echo 'active';?> ">
          <a class="nav-link" href="<?php echo URL; ?>index">
            <i class="material-icons">dashboard</i>
            <p>Main Page</p>
          </a>
        </li>
      <?php endif; ?>
      <!-- your sidebar here -->
    </ul>
  </div>
</div>
