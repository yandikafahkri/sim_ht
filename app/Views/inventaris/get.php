<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Inventaris HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
        <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
        <h1>Inventaris Handy Talkie</h1>
        
        <?php if(userLogin()->info_user=='Administrator') : ?>
        <div class="section-header-button">
            <a href="<?=site_url('inventaris/add')?>" class="btn btn-outline-primary"><i class="fas fa-plus-circle"></i>  Tambah Data</a>
        </div>
        <?php endif; ?>

        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
              <div class="breadcrumb-item active"><a href="<?=site_url('inventaris')?>">Inventaris HT</a></div>
            </div>
        </div>


        <div class="section-body text-dark">

        <!-- Sweet Alert -->
        <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"> </div>


        <div class="card">
                <div class="card-header">
                <h4>List Inventaris Handy Talkie</h4>
                </div>
                <div class="card-body p-3">
                <div class="table-responsive">
                    
                    <table  id="datatables" class="table table-bordered table-hover table-md dataTable dtr-inline p-2" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row" class="text-center bg-light">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="No: activate to sort column descending">No.</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                    aria-label="Departement: activate to sort column descending">Departement</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Lokasi: activate to sort column descending">Lokasi</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Nama Alias: activate to sort column descending">Nama Alias</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Action: activate to sort column descending">Detail</th>
                            </tr>
                        </thead>    
                        <tbody>
                            <?php $key=1; foreach ($data as $key => $value): ?>

                            <tr role="row" class="even odd">
                                <td tabindex="0" class="sorting_1"><?=$key+1; ?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->dep_ht?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->lokasi_ht?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->alias_ht?></td>
                                <td tabindex="0" class="text-center sorting_1" style="widht:10%">
                                    <!-- tombol detail -->
                                    <a href="/inventaris/<?= $value->alias_ht ?>"
                                    class="btn btn-sm text-success"><i class="fas fa-eye"></i> Lihat</a>                
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
