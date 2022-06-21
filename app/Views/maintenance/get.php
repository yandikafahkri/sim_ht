<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Maintenance HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
        <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
        <h1>Maintenance Handy Talkie</h1>
        <div class="section-header-button">
        <a href="<?=site_url('maintenance/new')?>" class="btn btn-outline-primary"><i class="fas fa-plus-circle"></i>  Tambah Data</a>
        </div>
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
              <div class="breadcrumb-item active"><a href="<?=site_url('maintenance')?>">Maintenance HT</a></div>
            </div>
        </div>


        <div class="section-body text-dark">

        <!-- Sweet Alert -->
        <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"> </div>


        <div class="card">
                <div class="card-header">
                <h4>List Maintenance Handy Talkie</h4>
                </div>
                <div class="card-body p-3">
                <div class="table-responsive">
                    
                    <table  id="datatables" class="table table-bordered table-hover table-md dataTable dtr-inline p-2" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row" class="text-center bg-light">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="No: activate to sort column descending">No.</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Nama Alias: activate to sort column descending">Nama Handy Talkie</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                 aria-label="Departement: activate to sort column descending">Tanggal Maintenance</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                 aria-label="Departement: activate to sort column descending">Kondisi</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Lokasi: activate to sort column descending">Foto Maintenance1</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Lokasi: activate to sort column descending">Foto Maintenance2</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Lokasi: activate to sort column descending">Foto Maintenance3</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Action: activate to sort column descending">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>        

                            <?php $key=1; foreach ($maintenance as $key => $value): ?>

                            <tr role="row" class="even odd">
                                <td tabindex="0" class="sorting_1"><?=$key+1; ?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->alias_ht?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->tanggal_maint?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->kondisi_maint?></td>
                                <td tabindex="0" class="sorting_1 text-center">
                                    <img src="/img/<?=$value->foto_maint1?>" width="100">
                                </td>
                                <td tabindex="0" class="sorting_1 text-center">
                                    <img src="/img/<?=$value->foto_maint2?>" width="100">
                                </td>
                                <td tabindex="0" class="sorting_1 text-center">
                                    <img src="/img/<?=$value->foto_maint3?>" width="100">
                                </td>
                                <td tabindex="0" class="text-center sorting_1" style="widht:10%">
                                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                    <!-- tombol cetak -->
                                    <?php if(userLogin()->info_user=='Administrator') : ?>        
                                        <button class="btn btn-warning text-white" 
                                        onclick="window.location.href='<?=site_url('maintenance/cetak/'.$value->id_maint)?>';">
                                        <i class="fas fa-print"></i> Print</a>
                                        </button>
                                    <?php endif ; ?>
                                    
                                    <!-- tombol edit -->
                                    <button  class="btn btn-primary text-white" 
                                        onclick="window.location.href='<?=site_url('maintenance/edit/'.$value->id_maint)?>';">
                                        <i class="fas fa-edit"></i> Edit</a>
                                    </button>

                                    
                                    <!-- tombol delete -->
                                    <form action="<?=site_url('maintenance/'.$value->id_maint)?>" method="post">
                                        <?= csrf_field() ?>   
                                        <input type="hidden" name="_method" value="DELETE" class="d-inline">
                                        <button class="btn btn-danger" onclick="return confirm('Data akan dihapus?')">
                                        <i class="fas fa-trash d-inline"> </i> Hapus
                                        </button>
                                    </form> 
                                    


                                </div>
                                </td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                </div>
                <div class="card-footer text-right">

                </div>
            </div>

        </div>
    </section>

<?= $this->endSection() ?>
