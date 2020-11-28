<?= $this->extend('auth/templates/layout'); ?>

<?= $this->section('content') ?>
  <div class="register-box">
    <div class="register-logo">
      <a href="<?= base_url() ?>">
        <img src="<?= base_url() ?>/assets/image/logo/bimbline-full.png" width="200" />
      </a>
    </div>
  
    <div class="card">
      <div class="card-body register-card-body eagle-bg snake-text">
        <p class="login-box-msg">Silahkan isi formulir berikut untuk mendaftarkan akun baru.</p>
        
        <?= view('Myth\Auth\Views\_message_block') ?>
        
        <form action="<?= route_to('register') ?>" method="post" autocomplete="off" class="form-only-line">
          <div class="input-group <?= session('errors.email') ? 'is-invalid' : '' ?>">
            <input type="email" class="form-control" placeholder="Email" name="email" value="<?= old('email') ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-fw fa-envelope"></span>
              </div>
            </div>
          </div>
          <!-- /.input-group -->
          <div class="invalid-feedback frog-text">
						<?= session('errors.email') ?>
					</div>
					<!-- /.invalid-feedback -->
          
          <div class="input-group mt-3 <?= session('errors.username') ? 'is-invalid' : '' ?>">
            <input type="text" class="form-control" placeholder="Username" name="username" value="<?= old('username') ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-fw fa-user"></span>
              </div>
            </div>
          </div>
          <!-- /.input-group -->
          <div class="invalid-feedback frog-text">
						<?= session('errors.username') ?>
					</div>
					<!-- /.invalid-feedback -->
					
          <div class="input-group mt-3 <?= session('errors.password') ? 'is-invalid' : '' ?>">
            <input type="password" class="form-control" placeholder="Password" name="password" value="<?= old('password') ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-fw fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- /.input-group -->
          <div class="invalid-feedback frog-text">
						<?= session('errors.password') ?>
					</div>
					<!-- /.invalid-feedback -->
					
          <div class="input-group mt-3 <?= session('errors.pass_confirm') ? 'is-invalid' : '' ?>">
            <input type="password" class="form-control" placeholder="Retype Password" name="pass_confirm" value="<?= old('pass_confirm') ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-fw fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- /.input-group -->
          <div class="invalid-feedback frog-text">
						<?= session('errors.pass_confirm') ?>
					</div>
					<!-- /.invalid-feedback -->
					
          <div class="row mt-4">
            <div class="col-8 d-flex align-items-center">
              <a href="<?= route_to('login') ?>" class="text-link frog-text">
                Sudah Memiliki Akun?
              </a>
            </div>
            <div class="col">
              <button type="submit" class="btn frog-btn outline-btn frog-text btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
<?= $this->endSection() ?>
                                                                                                                                                                                                                                                                                                            