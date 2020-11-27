<?= $this->extend('auth/templates/layout'); ?>

<?= $this->section('content'); ?>
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url() ?>">
        <img src="<?= base_url() ?>/assets/image/logo/bimbline-full.png" width="200" />
      </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body eagle-bg snake-text">
        <p class="login-box-msg">Sign in to start your session</p>
        
        <?= view('Myth\Auth\Views\_message_block') ?>
        
        <form action="<?= base_url() ?>/login" method="post" class="form-only-line" autocomplete="off">
          <?= csrf_field() ?>
          
          <?php if ($config->validFields === ['email']): ?>
            <div class="input-group <?= session('errors.login') ? 'is-invalid' : '' ?>">
              <input type="text" class="form-control <?= session('errors.login') ? 'is-invalid' : '' ?>" placeholder="Email" name="login" value="<?= old('login') ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-fw fa-envelope"></span>
                </div>
              </div>
            </div>
            <!-- /.input-group -->
            <div class="invalid-feedback">
  						<?= session('errors.login') ?>
  					</div>
  					<!-- /.invalid-feedback -->
          <?php else: ?>
            <div class="input-group <?= session('errors.login') ? 'is-invalid' : '' ?>">
              <input type="text" class="form-control <?= session('errors.login') ? 'is-invalid' : '' ?>" placeholder="Email or Username" name="login" value="<?= old('login') ?>" />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-fw fa-user"></span>
                </div>
              </div>
            </div>
            <!-- /.input-group -->
            <div class="invalid-feedback">
  						<?= session('errors.login') ?>
  					</div>
  					<!-- /.invalid-feedback -->
          <?php endif; ?>
          
          <div class="input-group mt-3 <?= session('errors.password') ? 'is-invalid' : '' ?>">
            <input type="password" class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>" placeholder="Password" name="password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- /.input-group -->
          <div class="invalid-feedback">
						<?= session('errors.password') ?>
					</div>
					<!-- /.invalid-feedback -->
          
          <div class="row my-3">
            <?php if ($config->allowRemembering): ?>
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember" name="remember" <?= old('remember') ? 'checked' : '' ?> />
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
            <?php endif; ?>
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        
        <?php if ($config->activeResetter): ?>
          <p class="mb-1">
            <a href="<?= base_url() ?>/forgot" class="text-link frog-text"><?= lang('Auth.forgotYourPassword') ?></a>
          </p>
        <?php endif; ?>
        
        <?php if ($config->allowRegistration) : ?>
          <p class="mb-0">
            <a href="<?= base_url() ?>/register" class="text-center text-link frog-text"><?= lang('Auth.needAnAccount') ?></a>
          </p>
        <?php endif; ?>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
<?= $this->endSection(); ?>
                                                                                                                                                                                                                                                                                                            