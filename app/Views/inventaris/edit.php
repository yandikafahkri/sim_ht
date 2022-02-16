<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Inventaris HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/inventaris/<?= $inventaris->id_ht ?>" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>  Kembali</a>
            </div>
                <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
                <h1>Edit Data Inventaris Handy Talkie</h1>
            
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?=site_url('inventaris')?>">Inventaris HT</a></div>
                    <div class="breadcrumb-item"><a href="/inventaris/<?= $inventaris->id_ht ?>">Detail <?= $inventaris->alias_ht ?></a></div>
                    <div class="breadcrumb-item active"><a href="<?=site_url('inventaris/edit')?>">Edit Data</a></div>
                </div>
        </div>

        <div class="section-body">

        <div class="card">
                <div class="card-header">
                <h4>Edit Data Inventaris Handy Talkie</h4>
                </div>
                <div class="card-body p-3">
                    <table class="table">
                        <form action="<?=site_url('inventaris/'.$inventaris->id_ht)?>" method="post">
                        <?= csrf_field() ?>   
                        <input type="hidden" name="_method" value="PUT">

                        <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="100">
                                    Departement
                                    </td>

                                    <td width="15">:</td>
                                    
                                    <td width="1000"  colspan=4>
                                    <select class="form-control" name="dep_ht" placeholder="Pilih Departement" value="<?= $inventaris->dep_ht ?>">
                                        <option value="Operasional">Operasional</option>
                                        <option value="Teknik">Teknik</option>
                                        <option value="HSSE">HSSE</option>
                                        <option value="IT">IT</option>
                                        <option value="General Manager">General Manager</option>
                                    </select>
                                    </td>
                                </div>
                            </tr>

                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Lokasi
                                    </td>

                                    <td>:</td>

                                    <td width="1000" colspan=4>
                                        <input class="form-control" type="text" name="lokasi_ht" placeholder="Lokasi HT" value="<?= $inventaris->lokasi_ht ?>" required/>
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
                                        <input class="form-control" type="text" name="alias_ht" placeholder="Nama Alias HT" value="<?= $inventaris->alias_ht ?>" required/>
                                    </td>

                                    <td width="200">
                                    Serial Number
                                    </td>

                                    <td>:</td>

                                    <td width="1000">
                                        <input class="form-control" type="text" name="sn_ht" placeholder="Serial Number HT" value="<?= $inventaris->sn_ht ?>" required/>
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
                                        <input class="form-control" type="text" name="tipe_ht" value="<?= $inventaris->tipe_ht ?>" placeholder="Tipe Radio HT" required/>
                                    </td>

                                    <td width="200">
                                    Penanggung Jawab
                                    </td>

                                    <td>:</td>

                                    <td width="1000">
                                        <input class="form-control" type="text" name="pj_ht" placeholder="Penanggung Jawab HT" value="<?= $inventaris->pj_ht ?>" required/>
                                    </td>

                                </div>
                            </tr>                            
                            
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Keterangan
                                    </td>

                                    <td>:</td>

                                    <td width="1000" colspan=4>
                                    <select class="form-control" name="ket_ht" placeholder="Status Perangkat">
                                        <option value="Normal 100%">Normal 100%</option>
                                        <option value="Normal 70%">Normal 70%</option>
                                        <option value="Rusak">Rusak</option>
                                        <?= $inventaris->ket_ht ?>
                                    </select>
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
