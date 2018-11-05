<header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url();?>">
        <img class="navbar-brand-full" src="<?=base_url();?>/dist/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="<?=base_url();?>/dist/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <!-- <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
      </button> -->
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style ="margin-right: 20px;"> Selamat Datang, <?=$_SESSION['user'];?>
            <img class="img-avatar" src="<?=base_url();?>/dist/img/avatars/6.jpg" >
          </a>
          <div class="dropdown-menu dropdown-menu-right" style ="margin-right: 20px; margin-top: 10px;">
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings
            </a>
            <a class="dropdown-item" href="<?=base_url('auth/logout.php');?>">
              <i class="fa fa-lock"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url();?>">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('pasien/data.php');?>">
                <i class="nav-icon icon-people"></i> Data Pasien
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('dokter/data.php');?>">
                <i class="nav-icon icon-people"></i> Data Dokter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('poliklinik/data.php');?>">
                <i class="nav-icon icon-folder-alt"></i> Data Poliklinik
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('obat/data.php');?>">
                <i class="nav-icon icon-tag"></i> Data Obat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('rekam_medis/data.php');?>">
                <i class="nav-icon icon-briefcase"></i> Rekam Medis
              </a>
            </li>
            <!-- <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-puzzle"></i> Base</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                  <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/cards.html">
                  <i class="nav-icon icon-puzzle"></i> Cards</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/carousel.html">
                  <i class="nav-icon icon-puzzle"></i> Carousel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tooltips.html">
                  <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-cursor"></i> Buttons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="buttons/buttons.html">
                  <i class="nav-icon icon-cursor"></i> Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/brand-buttons.html">
                  <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-star"></i> Icons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="icons/coreui-icons.html">
                    <i class="nav-icon icon-star"></i> CoreUI Icons
                    <span class="badge badge-success">NEW</span>
                  </a>
                  <a class="nav-link" href="icons/flags.html">
                  <i class="nav-icon icon-star"></i> Flags</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/font-awesome.html">
                    <i class="nav-icon icon-star"></i> Font Awesome
                    <span class="badge badge-secondary">4.7</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/simple-line-icons.html">
                  <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-bell"></i> Notifications</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="notifications/alerts.html">
                  <i class="nav-icon icon-bell"></i> Alerts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/badge.html">
                  <i class="nav-icon icon-bell"></i> Badge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/modals.html">
                  <i class="nav-icon icon-bell"></i> Modals</a>
                </li>
              </ul>
            </li> -->
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>