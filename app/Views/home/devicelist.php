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
                <form action="<?=base_url('api/add');?>" method="POST" class="d-inline ml-auto">
                  <?=csrf_field()?>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-plus pr-1"></i>Add API</button>
                </form>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Device</th>
                            <th>API</th>
                            <th>Key</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
<?php $a = 1;?>
<?php foreach ($device as $row) {?>
                            <tr>
                                <td class="text-center"><?=($a < 10) ? '0' : ''?><?=$a;?></td>
                                <td><?=$row['device'];?></td>
                                <td><span class="badge badge-primary"><?=$row['api'];?></span></td>
                                <td><span class="badge badge-success"><?=$row['key'];?></span></td>
                                <td>
                                <form action="<?=base_url();?>/api/<?=$row['id_api'];?>" method="POST" class="d-inline">
                                    <?=csrf_field()?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Realy?')"><i class="fas fa-trash-alt pr-1"></i>Delete</button>
                                </form>
                                </td>
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
