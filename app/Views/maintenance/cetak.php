<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Inventaris HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('maintenance')?>" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>  Kembali</a>
            </div>
                <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
                <h1>Cetak Data Maintenance Handy Talkie</h1>
            
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?=site_url('maintenance')?>">Maintenance HT</a></div>
                    <div class="breadcrumb-item"><a href="/maintenance/<?= $maintenance->id_maint ?>">Cetak <?= $maintenance->alias_ht ?></a></div>
                </div>
        </div>

        <?php if(session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?=session()->getFlashdata('success')?>
            </div>
        </div>
        <?php endif; ?> 
        
        <?php if(session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error !</b>
                <?=session()->getFlashdata('error')?>
            </div>
        </div>
        <?php endif; ?> 

        <div class="section-body text-dark">           
            <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4><i class="fa fa-print"></i> Cetak Data <?= $maintenance->alias_ht ?></h4>
                            </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <form action="<?=site_url('maintenance/'.$maintenance->id_maint)?>" method="post">
                                        <?= csrf_field() ?>   
                                        <input type="hidden" name="_method" value="PUT">

                                            <tr style="height: 50px;">
                                                <div class="form-group text-center">
                                                    <td width="" colspan=12>
                                                        <img src="/img/kop_mjc.jpg" width="100%">
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr style="height: 50px;">
                                                <div class="form-group">
                                                    <td width="200">
                                                    Nama Handy Talkie
                                                    </td>

                                                    <td width="15">:</td>
                                                    
                                                    <td colspan=10 width="400" >
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

                                                    <td colspan=10 width="400">
                                                        <?= $maintenance->tanggal_maint ?>
                                                    </td>

                                                </div>
                                            </tr>
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
                                            <tr style="height: 50px;" >
                                                <div class="form-group">
                                                    <td colspan=3 width="500">
                                                    Kondisi Alat
                                                    </td>

                                                    <td colspan=9 width="">
                                                    <?= $maintenance->kondisi_maint ?>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr style="height: 50px;">
                                                <td colspan=3>
                                                    <?php if(userLogin()->info_user=='Administrator') : ?>        
                                                        <td colspan=3>
                                                        <a href="<?=site_url('maintenance/print/'.$maintenance->id_maint) ?>" target="_blank"
                                                        class="btn btn-sm btn-outline-dark"><i class="fas fa-print"></i> Print</a>
                                                        </td>
                                                    <?php endif; ?>
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
