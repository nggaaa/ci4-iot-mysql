<?=$this->extend('auth/template_auth');?>
<?=$this->section('content');?>
    <section class="section">
      <div class="container mt-5 " >
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="https://img.icons8.com/nolan/64/cloud.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <div class="card card-primary">
              <div class="card-header"><h4>Sign Up</h4></div>
              <div class="card-body">
                <form method="POST" action="<?=base_url('auth/registration')?>">
                <?=csrf_field();?>
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input value="<?=old('name');?>" id="name" type="text" class="form-control <?=($validation->hasError('name')) ? 'is-invalid' : '';?>" name="name">
                    <div class="invalid-feedback">
                    <?=$validation->getError('name');?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input value="<?=old('email');?>" id="email" type="email" class="form-control <?=($validation->hasError('email')) ? 'is-invalid' : '';?>" name="email">
                    <div class="invalid-feedback">
                    <?=$validation->getError('email');?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength <?=($validation->hasError('password')) ? 'is-invalid' : '';?>" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                      <div class="invalid-feedback">
                        <?=$validation->getError('password');?>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control <?=($validation->hasError('password-confirm')) ? 'is-invalid' : '';?>" name="password-confirm">
                      <div class="invalid-feedback">
                        <?=$validation->getError('password-confirm');?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                <div class="mt-1 text-center">
                Already have an account? <a href="<?=base_url('auth');?>">Sign In</a>
              </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Saronggos <?=date('Y');?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?=$this->endSection();?>