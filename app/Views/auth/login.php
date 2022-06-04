
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <?= $this->renderSection('title') ?>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
</head>

<body>
  <div id="app" class="bg-light">
    <section class="section">
      <div class="container mt-1">
        <div class="row">
          <div class="col-12 col-sm-6 offset-sm-2 col-sm-6 offset-sm-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img alt="image" src="<?=base_url()?>/template/assets/img/MJCpngHT.png" class="p-1 m-2" width="150px">
                <p>
            </div>
            
            <div class="text-center text-dark">
                    <h6>Sistem Informasi Maintenance HT</h6> 
              <?php if(session()->getFlashdata('error')) : ?>
              <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                      <button class="close" data-dismiss="alert">x</button>
                      <b>Error !</b>
                      <?=session()->getFlashdata('error')?>
                  </div>
              </div>
              <?php endif; ?> 
            </div>

            <div class="card card-info">
              <div class="card-header"><h4>Silahkan Login</h4></div>

             <div class="card-body">
                <form method="POST" action="<?=site_url('auth/loginProcess')?>" class="needs-validation" novalidate="">
                <?= csrf_field() ?>   
                  <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="Email" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                      <input id="password" type="password" class="form-control" name="password" placeholder="Password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-info btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div>
            <footer class="simple-footer">
                <div class="footer-left">
                Copyright &copy; 2022 By Yandika Fahkri Ismananda
                </div>
            </footer>

          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
