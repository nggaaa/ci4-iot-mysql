<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
<div class="d-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
</div>
<?php $initialname = substr($user['name_user'], 0, 1);?>
  <ul class="navbar-nav navbar-right ml-auto">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="<?=base_url();?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, <?=$user['name_user'];?></div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title"><?=($user['role'] == 1) ? 'Administrator' : 'User'?></div>
        <div class="dropdown-divider"></div>
        <a href="<?=base_url('auth/logout');?>" onclick="return confirm('Realy to Logout?');" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>