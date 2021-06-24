<?=$this->extend('auth/template_auth');?>
<?=$this->section('content');?>
<section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="https://img.icons8.com/nolan/64/cloud.png" alt="logo" width="80" class="shadow-light rounded-circle mb-4 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">IOT Saronggos</span></h4>
            <form method="POST" action="<?=base_url('auth/verification');?>" class="needs-validation" novalidate="">
                <?=csrf_field()?>
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  Please fill in your password
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>
              <div class="mt-1 text-center">
                Don't have an account? <a href="<?=base_url('auth/register');?>">Create new one</a>
              </div>
            </form>

            <div class="text-center mt-2 text-small">
              Copyright &copy; Saronggos <?=date('Y');?>.
            </div>
            <div class="text-center text-small">
              Image profile by <a href="https://icons8.com/" target="_blank" rel="noopener noreferrer">Icons8</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=justin-kauffman-a8lTjWJJgLA-unsplash.jpg&w=1920">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
              </div>
              Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?=$this->endSection();?>