<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Manage User</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
        <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
        <h1>Manage User</h1>
        <div class="section-header-button">
            <a href="<?=site_url('user/add')?>" class="btn btn-outline-primary"><i class="fas fa-plus-circle"></i>  Daftarkan Akun</a>
        </div>
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
              <div class="breadcrumb-item active"><a href="<?=site_url('user')?>">Manage User</a></div>
            </div>
        </div>


        <div class="section-body text-dark">

        <div class="card">
                <div class="card-header">
                <h4>List User</h4>
                </div>
                <div class="card-body p-3">
                <div class="table-responsive">
                    
                    <table  id="example1" class="table table-bordered table-hover table-md dataTable dtr-inline p-2" role="grid" aria-describedby="example1_info">
                        <tbody>
                            <tr role="row" class="text-center bg-light">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="No: activate to sort column descending">No.</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                 aria-label="Departement: activate to sort column descending">Nama User</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Lokasi: activate to sort column descending">Email</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Action: activate to sort column descending">Password</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                aria-label="Action: activate to sort column descending">Action</th>
                            </tr>

                            <?php $key=1; foreach ($data as $key => $value): ?>

                            <tr role="row" class="even odd">
                                <td tabindex="0" class="sorting_1"><?=$key+1; ?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->name_user?></td>
                                <td tabindex="0" class="sorting_1"><?=$value->email_user?></td>
                                <td tabindex="0" class="sorting_1">*****</td>
                                <td tabindex="0" class="text-center sorting_1" style="widht:10%">
                                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary text-white" 
                                        onclick="window.location.href='<?=site_url('user/edit/'.$value->id_user)?>';">
                                            <!-- tombol edit -->

                                                <i class="fas fa-edit"></i> Edit Akun</a>
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Data akan dihapus?')">
                                            <!-- tombol delete -->
                                            <form action="<?=site_url('user/'.$value->id_user)?>" method="post" onsubmit="return confirm('Data akan dihapus?')">
                                                <?= csrf_field() ?>   
                                                <input type="hidden" name="_method" value="DELETE">
                                                <i class="fas fa-trash"></i>
                                            </form> 
                                        </button>
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
