<?=$this->extend('home/layout/template');?>
<?=$this->section('content');?>
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data List</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="<?=base_url();?>">Dashboard</a></div>
          <div class="breadcrumb-item">Data List</div>
        </div>
      </div>
      <div class="section-body">
            <h2 class="section-title">Info</h2>
            <p class="section-lead">
              Im using <a href="https: //datatables.net/" target="_blank" rel="noopener noreferrer">datatables</a>  because its very easy and efficient for me.
            </p>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Date Time</th>
                            <th>Device</th>
                            <th>Temp</th>
                            <th>Humidity</th>
                          </tr>
                        </thead>
                        <tbody>
<?php $a = 1;?>
<?php foreach ($data as $row) {?>
                            <tr>
                                <td class="text-center"><?=($a < 10) ? '0' : ''?><?=$a;?></td>
                                <td><?=$row['created_at']?></td>
                                <td><?=$row['device'];?></td>
                                <td><?=$row['suhu'];?><sup>0</sup>C</td>
                                <td><?=$row['kelembaban'];?>%</td>
                            </tr>
<?php $a++;?>
<?php }?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </section>
</div>
<?=$this->endSection();?>
