<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Inventaris HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <button type="button" class="btn btn-outline-danger" onclick="javascript:window.close()">
                    <strong>X</strong> Tutup Jendela
                </button>
            </div>
                <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
                <h1>Foto Maintenance HT <?= $maintenance->alias_ht ?></h1>
            
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?=site_url('maintenance')?>">Maintenance HT</a></div>
                    <div class="breadcrumb-item"><a href="/maintenance/foto/<?= $maintenance->id_maint ?>">Foto <?= $maintenance->alias_ht ?></a></div>
                </div>
        </div>

        <div class="section-body text-dark">           
            <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4><i class="fa fa-images"></i> Foto Maintenance <?= $maintenance->alias_ht ?></h4>
                            </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <form action="<?=site_url('maintenance/'.$maintenance->id_maint)?>" method="post">
                                        <?= csrf_field() ?>   
                                        <input type="hidden" name="_method" value="PUT">

                                            <tr style="height: 50px;" >
                                                <div class="form-group text-center">
                                                    <td colspan=3 class="bg-light text-center" width="400">
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
                                                    <td class="text center" colspan=3 width="400">
                                                        <div class="mt-3 mb-3 text-center">
                                                            <img src="/img/<?=$maintenance->foto_maint1?>" width="220px">
                                                        </div>
                                                    </td>
                                                    <td class="text center" colspan=3 width="400">
                                                        <div class="mt-3 mb-3 text-center">
                                                            <img src="/img/<?=$maintenance->foto_maint2?>" width="220px">
                                                        </div>
                                                    </td>
                                                    <td class="text center" colspan=3 width="400">
                                                        <div class="mt-3 mb-3 text-center">
                                                            <img src="/img/<?=$maintenance->foto_maint3?>" width="220px">
                                                        </div>
                                                    </td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                        </div>
                    </div>
            </div>
        </div>





        </section>
        

<?= $this->endSection() ?>
