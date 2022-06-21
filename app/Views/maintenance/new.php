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
                <h1>Tambah Data Maintenance Handy Talkie</h1>
            
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?=site_url('maintenance')?>">Maintenance HT</a></div>
                    <div class="breadcrumb-item active"><a href="<?=site_url('maintenance/new')?>">Tambah Data</a></div>
                </div>
        </div>

        <div class="section-body">

        <div class="card">
                <div class="card-header">
                <h4>Tambah Data Maintenance Handy Talkie</h4>
                </div>
                <div class="card-body p-3">
                    <table>
                        <form action="<?=site_url('maintenance/create')?>" method="post" autocomplete="off" enctype="multipart/form-data">
                        <?= csrf_field() ?>   
                        <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Nama Alias
                                    </td>

                                    <td width="15">:</td>
                                    
                                    <td width="240">
                                    <select class="selectpicker" width="1000" data-live-search="true" name="alias_ht" placeholder="Pilih Nama Alias" required>
                                        <option value="alias_ht"></option>
                                        <?php foreach ($inventaris as $key => $value) : ?>
                                             <option value="<?=$value->alias_ht?>"><?=$value->alias_ht?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </td>

                                    <td width="200">
                                    Tanggal Maintenance
                                    </td>

                                    <td>:</td>

                                    <td width="500">
                                        <input class="form-control" type="date" name="tanggal_maint" required/>
                                    </td>
                                </div>
                            </tr>

                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Kondisi Perangkat
                                    </td>

                                    <td>:</td>

                                    <td width="1000" colspan=4>
                                    <select class="form-control" name="kondisi_maint" placeholder="Pilih Nama Alias" required>
                                        <option value="Baik 100%">Baik 100%</option>
                                        <option value="Baik 75%">Baik 75%</option>
                                        <option value="Layak Pakai 50%">Layak Pakai 50%</option>
                                        <option value="Rusak">Rusak</option>
                                    </select>
                                    </td>
                                </div>
                            </tr>

                            
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Foto Maintenance 1
                                    </td>

                                    <td>:</td>

                                    <td width="1000" colspan=4>
                                        <input type="file" class="form-control" id="foto_maint1" name="foto_maint1" required>                                    
                                    </td>

                                </div>
                            </tr>
                            
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Foto Maintenance 2
                                    </td>

                                    <td>:</td>

                                    <td width="1000" colspan=4>
                                        <input type="file" class="form-control" id="foto_maint2" name="foto_maint2"  required>                                    
                                    </td>

                                </div>
                            </tr>
                            
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Foto Maintenance 3
                                    </td>

                                    <td>:</td>

                                    <td width="1000" colspan=4>
                                        <input type="file" class="form-control" id="foto_maint3" name="foto_maint3"  required>                                    
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
