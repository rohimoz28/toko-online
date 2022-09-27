<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Registration Form</h1>
                </div>

                <?php if ($this->session->flashdata('error')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>

                <form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Your name">
                    <?php echo form_error('name', '<div class="text-danger pl-3">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                    <?php echo form_error('username', '<div class="text-danger pl-3">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?php echo form_error('password', '<div class="text-danger pl-3">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password_confirmation" name="password_confirmation" placeholder="Re-type password">
                    <?php echo form_error('password_confirmation', '<div class="text-danger pl-3">', '</div>'); ?>
                  </div>

                  <button href="index.html" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('/') ?>">Back</a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>