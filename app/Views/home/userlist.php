<?=$this->extend('home/layout/template');?>
<?=$this->section('content');?>
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data List</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="<?=base_url();?>">Dashboard</a></div>
          <div class="breadcrumb-item">Users List</div>
        </div>
      </div>
      <div class="section-body">
            <h2 class="section-title">Info</h2>
            <p class="section-lead">
              Click role button to change role to administrator or user.
            </p>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Email</th>
                            <th>Fullname</th>
                            <th>Role</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
<?php $a = 1;?>
<?php foreach ($userlist as $row) {?>
                            <tr>
                                <td class="text-center"><?=($a < 10) ? '0' : ''?><?=$a;?></td>
                                <td><?=$row['email_user'];?></td>
                                <td><?=$row['name_user'];?></td>
                                <td><span class="badge badge-<?=($row['role'] == 1) ? 'success' : 'primary'?>"><?=($row['role'] == 1) ? 'Administrator' : 'User'?></span></td>

                                <?php if ($row['id_user'] !== $user['id_user']) {?>
                                <td>
                                <form action="<?=base_url();?>/role/<?=$row['id_user'];?>" method="POST" class="d-inline">
                                    <?=csrf_field()?>
                                    <input type="hidden" name="_method" value="PUT">
                                    <button class="btn btn-<?=($row['role'] != 1) ? 'success' : 'warning'?> btn-sm ml-3" onclick="return confirm('Realy? Role has changed!')"><i class="fas fa-<?=($row['role'] != 1) ? 'chevron-up' : 'chevron-down'?> pr-1"></i>Role</button>
                                </form>
                                    <form action="<?=base_url();?>/users/<?=$row['id_user'];?>" method="POST" class="d-inline">
                                    <?=csrf_field()?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger btn-sm ml-3" type="submit" onclick="return confirm('Realy? Changes cannot be reversed!')"><i class="fas fa-trash-alt pr-1"></i>Delete</button>
                                    </form>
                                </td>
                                <?php }?>
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
