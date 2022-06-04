<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Inventaris HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php use CodeItNow\BarcodeBundle\Utils\QrCode; ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('inventaris')?>" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>  Kembali</a>
            </div>
                <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
                <h1>View Data Inventaris Handy Talkie</h1>
            
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?=site_url('inventaris')?>">Inventaris HT</a></div>
                    <div class="breadcrumb-item"><a href="/inventaris/<?= $inventaris->id_ht ?>">Detail <?= $inventaris->alias_ht ?></a></div>
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
                    <div class="col-lg-9 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4><i class="fa fa-table"></i> Data <?= $inventaris->alias_ht ?></h4>
                            </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <form action="<?=site_url('inventaris/'.$inventaris->id_ht)?>" method="post">
                                        <?= csrf_field() ?>   
                                        <input type="hidden" name="_method" value="PUT">

                                        <tr style="height: 50px;">
                                                <div class="form-group">
                                                    <td width="100">
                                                    Departement
                                                    </td>

                                                    <td width="15">:</td>
                                                    
                                                    <td colspan=4 width="1000" >
                                                        <?= $inventaris->dep_ht ?>
                                                    </td>
                                                </div>
                                            </tr>

                                            <tr style="height: 50px;">
                                                <div class="form-group">
                                                    <td width="200">
                                                    Lokasi
                                                    </td>

                                                    <td>:</td>

                                                    <td colspan=4 width="1000">
                                                        <?= $inventaris->lokasi_ht ?>
                                                    </td>
                                                </div>
                                            </tr>

                                            
                                            <tr style="height: 50px;">
                                                <div class="form-group">
                                                    <td width="200">
                                                    Nama Alias
                                                    </td>

                                                    <td>:</td>

                                                    <td width="1000">
                                                        <?= $inventaris->alias_ht ?>
                                                    </td>

                                                    <td width="200">
                                                    Serial Number
                                                    </td>

                                                    <td>:</td>

                                                    <td width="1000">
                                                        <?= $inventaris->sn_ht ?>
                                                    </td>

                                                </div>
                                            </tr>

                                            
                                            <tr style="height: 50px;">
                                                <div class="form-group">
                                                    <td width="200">
                                                    Tipe Radio HT
                                                    </td>

                                                    <td>:</td>

                                                    <td width="1000">
                                                        <?= $inventaris->tipe_ht ?>
                                                    </td>

                                                    <td width="200">
                                                    Penanggung Jawab
                                                    </td>

                                                    <td>:</td>

                                                    <td width="1000">
                                                        <?= $inventaris->pj_ht ?>
                                                    </td>

                                                </div>
                                            </tr>
                                        
                                            <tr style="height: 50px;">
                                                <div class="form-group">
                                                    <td width="200">
                                                    Keterangan
                                                    </td>

                                                    <td>:</td>

                                                    <td width="1000">
                                                        <?= $inventaris->ket_ht ?>
                                                    </td>

                                                    <td colspan=3>
                                                        <!-- tombol edit -->
                                                        <a href="<?=site_url('inventaris/edit/'.$inventaris->id_ht) ?>"
                                                        class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i> Edit Data</a>
                                                        <!-- tombol delete -->
                                                        <form action="<?=site_url('inventaris/'.$inventaris->id_ht)?>" method="post" onsubmit="return confirm('Data akan dihapus?')">
                                                            <?= csrf_field() ?>   
                                                            <input type="hidden" name="_method" value="DELETE" class="d-inline">
                                                            <button class="btn btn-sm text-danger btn-outline-danger" onclick="return confirm('Data akan dihapus?')">
                                                            <i class="fas fa-trash"></i> Hapus Data</button>
                                                        </form> 
                                                    </td>

                                                </div>
                                            </tr>

                                            <tr style="height: 50px;">

                                            </tr>
                                        </form>
                                    </table>
                                </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4> <i class="fas fa-qrcode"></i> QrCode</h4>
                            </div>
                                <div class="card-body text-center">
                                    <?php

                                    $qrCode = new QrCode();
                                    $qrCode
                                        ->setText('localhost:8080/inventaris/detail/'.$inventaris->id_ht)
                                        ->setSize(150)
                                        ->setPadding(10)
                                        ->setErrorCorrection('high')
                                        ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                                        ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                                        ->setLabel($inventaris->alias_ht)
                                        ->setLabelFontSize(12)
                                        ->setImageType(QrCode::IMAGE_TYPE_PNG)
                                    ;
                                    echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                                    ?>

                                    
                                </div>
                                <div class="card-footer text-center">
                                    <!-- tombol print -->
                                    <a href="<?=site_url('inventaris/genqr/'.$inventaris->alias_ht) ?>" target="_blank"
                                    class="btn btn-sm btn-outline-dark"><i class="fas fa-print"></i> Print</a>
                                    <vr>
                                    <a href="<?=site_url('inventaris/downqr/'.$inventaris->alias_ht) ?>" target="_blank"
                                    class="btn btn-sm btn-outline-dark"><i class="fas fa-download"></i> Download</a>
                                </div>
                        </div>
                    </div>
            </div>

</section>
        

<?= $this->endSection() ?>
