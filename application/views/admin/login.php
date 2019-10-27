<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("admin/_partials/head-admin.php") ?>

</head>

<body class="" style="background-color:#EA4335">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Administrator Login Page</h1>
                    <?= $this->session->flashdata('message'); ?>
                       
                 
                  </div>
                  <form class="user" method="post" action="<?= base_url('Login_Page'); ?>"> 
                    <div class="form-group">
                      <input type="text" placeholder="Username" class="form-control form-control-user" id="user_admin" name="user_admin"
                      value="<?= set_value('user_admin'); ?>">
                      <?= form_error('user_admin','<small class="form-text text-danger">','</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" placeholder="Password" class="form-control form-control-user" id="pass_admin" name="pass_admin">
                      <?= form_error('pass_admin','<small class="form-text text-danger">','</small>'); ?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-user btn-block">
                      Login
                    </button>
                    <hr>
                 
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->
                
                
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
