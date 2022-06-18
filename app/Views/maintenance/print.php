
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

  <!-- DataTable -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/dataTables/datatables.min.css">
</head>

<body>
<section class="section">
    <div class="card-body">
        <table class="table table-bordered">
            <form action="<?=site_url('maintenance/'.$maintenance->id_maint)?>" method="post">
            <?= csrf_field() ?>   
            <input type="hidden" name="_method" value="PUT">

                    <div class="form-group mt-3 mb-3 text-center">
                            <img src="/img/kop_mjc.jpg" width="100%">
                    </div>
                <tr style="height: 50px;">
                    <div class="form-group">
                        <td width="200">
                        Nama Handy Talkie
                        </td>

                        <td width="15">:</td>
                        
                        <td colspan=5 width="500" >
                            <?= $maintenance->alias_ht ?>
                        </td>
                    </div>
                </tr>

                
                <tr style="height: 50px;">
                    <div class="form-group">
                        <td width="200">
                        Tanggal Maintenance
                        </td>

                        <td>:</td>

                        <td colspan=5 width="500">
                            <?= $maintenance->tanggal_maint ?>
                        </td>

                    </div>
                </tr>

                <tr style="height: 50px;" >
                    <div class="form-group text-center">
                        <td colspan=3 class="bg-light text-center" width="500">
                        Foto Maintenance 1
                        </td>

                        <td colspan=3 class="bg-light text-center" width="">
                        Foto Maintenance 2
                        </td>
                        <td colspan=3 class="bg-light text-center" width="">
                        Foto Maintenance 3
                        </td>
                    </div>
                </tr>

            
                <tr style="height: 50px;">
                        <td class="text center" colspan=3 width="800">
                            <div class="mt-3 mb-3 text-center">
                                <img src="/img/<?=$maintenance->foto_maint1?>" width="300px">
                            </div>
                        </td>
                        <td class="text center" colspan=3 width="600">
                            <div class="mt-3 mb-3 text-center">
                                <img src="/img/<?=$maintenance->foto_maint2?>" width="300px">
                            </div>
                        </td>
                        <td class="text center" colspan=3 width="600">
                            <div class="mt-3 mb-3 text-center">
                                <img src="/img/<?=$maintenance->foto_maint3?>" width="300px">
                            </div>
                        </td>
                </tr>

                <tr style="height: 50px;" >
                    <div class="form-group">
                        <td colspan=3 width="500">
                        Kondisi Alat
                        </td>

                        <td colspan=4 width="">
                        <?= $maintenance->kondisi_maint ?>
                        </td>
                    </div>
                </tr>

            </form>
        </table>
    </div>
</section>

    <script type="text/javascript"> 
		window.addEventListener("load", window.print());
	</script>

</body>
</html>
        