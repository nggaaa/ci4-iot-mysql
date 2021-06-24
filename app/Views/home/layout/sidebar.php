<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?=base_url()?>">IOT</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?=base_url()?>">IOT</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="<?=($title == 'Home') ? 'active' : ''?>"><a class="nav-link" href="<?=base_url();?>"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li class="<?=($title == 'Data') ? 'active' : ''?>"><a class="nav-link" href="<?=base_url('data');?>"><i class="fas fa-table"></i> <span>List Data</span></a></li>
        <?php if ($user['role'] == 1): ?>
          <li class="<?=($title == 'Device') ? 'active' : ''?>"><a class="nav-link" href="<?=base_url('device');?>"><i class="fas fa-microchip"></i> <span>Device Data</span></a></li>
          <li class="<?=($title == 'Users List') ? 'active' : ''?>"><a class="nav-link" href="<?=base_url('users');?>"><i class="fas fa-users"></i> <span>Users Data</span></a></li>
        <?php endif;?>
      </ul>
  </aside>
</div>