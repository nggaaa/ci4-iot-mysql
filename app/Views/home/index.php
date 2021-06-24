<?=$this->extend('home/layout/template');?>
<?=$this->section('content');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Users</h4>
                </div>
                <div class="card-body">
                  <?=$totaluser;?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="fas fa-link"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total API</h4>
                </div>
                <div class="card-body">
                  <?=$totalapi;?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="fas fa-database"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Request</h4>
                </div>
                <div class="card-body">
                  <?=$totaldata;?>
                </div>
              </div>
            </div>
          </div>
    </div>
  </section>
</div>
<?=$this->endSection();?>