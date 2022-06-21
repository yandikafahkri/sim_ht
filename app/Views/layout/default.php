
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <?= $this->renderSection('title') ?>
    
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">

  <!-- DataTable -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/dataTables/datatables.min.css">

  <!-- sweetalert2 -->
  <link rel="stylesheet" href="<?=base_url()?>/template/sweetalert2/dist/sweetalert2.min.css">

  <!-- select picker -->
  <link rel="stylesheet" href="<?=base_url()?>/template/snapappointments/bootstrap-select/dist/css/bootstrap-select.min.css">

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <i class="fa fa-user"></i>            
            <div class="d-sm-none d-lg-inline-block"> <?= userLogin()->name_user?></div></a>
            <div class="dropdown-menu dropdown-menu-right">


                <?php if(userLogin()->info_user!='Administrator') : ?>        
                  <!-- tombol edit -->
                  <button  class="dropdown-item has-icon" 
                    onclick="window.location.href='<?=site_url('user/edit/'.userLogin()->id_user)?>';">
                    <i class="fas fa-user-cog"></i> Setting Account</a>
                  </button>
                <?php endif ; ?>

                <div class="dropdown-divider"></div>
                  <button class="dropdown-item has-icon text-danger" 
                          onclick="Swal.fire({
                          title: 'Anda akan keluar sistem?',
                          showDenyButton: false,
                          showCancelButton: true,
                          confirmButtonText: 'Logout',
                          denyButtonText: `Cancel`,
                        }).then((result) => {
                          if (result.isConfirmed) {
                                window.location.href='<?=site_url('auth/logout')?>';
                              } else if (result.isDenied) {
                                Swal.fire('Changes are not saved', '', 'info')
                              }
                        })">
                    <i class="fas fa-sign-out-alt"></i> Logout</a>
              </button>

                <div class="dropdown-divider"></div>

                <div class="has-icon text-muted text-center">
                    You're : <?= userLogin()->info_user?>
                </div>

            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img alt="image" src="<?=base_url('/')?>/template/assets/img/MJCpngHT.png" class="p-1 m-2" width="100px">
            <p>
            <a href="<?=site_url('/')?>">SI Maintenance HT</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=site_url('/')?>">SIM-HT</a>
          </div>
          
              <ul class="sidebar-menu">
                  <?=$this->include('layout/menu.php') ?>
              </ul>
            
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fa fa-question-circle"></i> CV Mitra Jaya Computer
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">

        <?= $this->renderSection('content') ?>

      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By Yandika Fahkri Ismananda
        </div>
        <div class="footer-right">
          Template Stisla
        </div>
      </footer>
    </div>
  </div>  
   
  <!-- Select Picker -->
  <script src="<?=base_url()?>/template/node_modules/popper/dist/popper.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  
  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>
  <script src="<?=base_url()?>/template/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="<?=base_url()?>/template/snapappointments/bootstrap-select/dist/js/bootstrap-select.min.js"></script>


  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/custom.js"></script>
  
  <!-- DataTable -->
  <script src="<?=base_url()?>/template/assets/dataTables/datatables.min.js"></script>

  <script>
    $(document).ready( function () {
        $('#datatables').DataTable();
    } );
  </script>


  <script>
    $('.selectpicker').selectpicker();
  </script>


</body>
</html>
