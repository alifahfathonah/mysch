<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title><?=$page?> - <?=$this->sistem->profil()->nama_sekolah?></title>

      <!-- Custom fonts for this template-->
      <link href="<?=base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="<?=base_url()?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">
      <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5" style="padding-top: 20px">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-5">
                      <div class="text-center">
                        <?php $this->view('admin/messages'); ?>
                        <h1 class="h4 text-gray-900 mb-4">Login Administrator !</h1>
                      </div>
                      <?= form_open('auth/process'); ?>
                        <div class="form-group">
                          <i><small style="color: red"><?=validation_errors('username or email')?></small></i>
                          <input type="text" name="u_name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username ..." required>
                        </div>
                        <div class="form-group">
                        <i><small style="color: red"><?=validation_errors('password')?></small></i>
                          <input type="password" name="u_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                          Login
                        </button>
                      </form>
                      <hr>
                      <div class="float-right">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                      </div>
                      <div>
                        <a class="small" href="<?=site_url()?>">Back to Landing!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="<?=base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
      <script src="<?=base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?=base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?=base_url()?>assets/admin/js/sb-admin-2.min.js"></script>

    </body>

</html>
