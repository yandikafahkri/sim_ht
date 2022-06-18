<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Maintenance HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('maintenance')?>" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>  Kembali</a>
            </div>
                <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
                <h1>Edit Data Maintenance <?= $maintenance->alias_ht ?></h1>
            
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?=site_url('maintenance')?>">Maintenance HT</a></div>
                    <div class="breadcrumb-item"><a href="/maintenance/<?= $maintenance->id_maint ?>">Edit <?= $maintenance->alias_ht ?></a></div>

                </div>
        </div>

        <div class="section-body">

        <div class="card">
                <div class="card-header">
                <h4>Edit Data Maintenance <?= $maintenance->alias_ht ?></h4>
                </div>
                <div class="card-body p-3">
                    <table class="">
                        <form action="<?=site_url('maintenance/'.$maintenance->id_maint)?>" method="post" autocomplete="off" enctype="multipart/form-data">
                        <?= csrf_field() ?>  
                        <input type="hidden" name="_method" value="PUT">
 
                        <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="150">
                                    Nama Alias
                                    </td>

                                    <td width="15">:</td>
                                    
                                    <td width="700">
                                    <select class="form-control" name="alias_ht" placeholder="Pilih Nama Alias" required>
                                        <option value="alias_ht"></option>
                                        <?php foreach ($inventaris as $key => $value) : ?>
                                             <option value="<?=$value->alias_ht?>"><?=$value->alias_ht?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </td>

                                    <td>
                                        <div class="form-control text-muted"><?= $maintenance->alias_ht ?></div>
                                    </td>

                                </div>
                            </tr>

                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="">
                                    Tanggal Maintenance
                                    </td>

                                    <td>:</td>

                                    <td width="">
                                        <input class="form-control" type="date" name="tanggal_maint" value="<?= $maintenance->tanggal_maint ?>" required/>
                                    </td>

                                    <td>
                                        <div class="form-control text-muted"><?= $maintenance->tanggal_maint ?></div>
                                    </td>

                                </div>
                            </tr>

                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="">
                                    Kondisi Perangkat
                                    </td>

                                    <td>:</td>

                                    <td width="">
                                    <select class="form-control" name="kondisi_maint" placeholder="Pilih Nama Alias" required>
                                        <option value="Baik 100%">Baik 100%</option>
                                        <option value="Baik 75%">Baik 75%</option>
                                        <option value="Layak Pakai 50%">Layak Pakai 50%</option>
                                        <option value="Rusak">Rusak</option>
                                    </select>
                                    </td>

                                    <td>
                                        <div class="form-control text-muted"><?= $maintenance->kondisi_maint ?></div>
                                    </td>


                                </div>
                            </tr>

                            
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="">
                                    Foto Maintenance 1
                                    </td>

                                    <td>:</td>

                                    <td width="">
                                        <input type="file" class="form-control" id="foto_maint1" name="foto_maint1">
                                        <?= $maintenance->foto_maint1 ?>                                    
                                    </td>

                                    <td>
                                        <div class="d-inline mt-2 mb-2">
                                            <img src="/img/<?=$maintenance->foto_maint1?>" width="50">
                                        </div>
                                    </td>


                                </div>
                            </tr>
                            
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="">
                                    Foto Maintenance 2
                                    </td>

                                    <td>:</td>

                                    <td width="">
                                        <input type="file" class="form-control" id="foto_maint2" name="foto_maint2">  
                                        <?= $maintenance->foto_maint2 ?>                                                                    
                                    </td>

                                    <td>
                                       <div class="d-inline mt-2 mb-2">
                                            <img src="/img/<?=$maintenance->foto_maint2?>" width="50">
                                        </div>  
                                    </td>


                                </div>
                            </tr>
                            
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="">
                                    Foto Maintenance 3
                                    </td>

                                    <td>:</td>

                                    <td width="">
                                        <input type="file" class="form-control" id="foto_maint3" name="foto_maint3">  
                                        <?= $maintenance->foto_maint3 ?>                                                                    
                                    </td>

                                    <td>
                                       <div class="d-inline mt-2 mb-2">
                                            <img src="/img/<?=$maintenance->foto_maint3?>" width="50">
                                        </div>  
                                    </td>


                                </div>
                            </tr>

                            
                            <tr style="height: 50px;">
                                <td></td>
                                <td></td>
                                <td>
                                <input class="btn btn-success" type="submit"  value="Save" />
                                <input class="btn btn-secondary" type="reset" value="Reset" />
                                <!-- <button class="btn btn-success" type="submit"><i class="fas fa-papper-plane"></i> Simpan</button>
                                <button class="btn btn-secondary" type="reset"><i class=""></i> Reset</button> -->
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                <div class="card-footer text-right">

                </div>
            </div>

        </div>
    </section>

<?= $this->endSection() ?>
