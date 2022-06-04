<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Dashboard</title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
        <h1>Dashboard  |  Sistem Informasi Maintenance HT</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-list"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Inventaris HT</h4>
                  </div>
                  <div class="card-body">
                  <?=$jml_inv?>
                </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-calendar-check"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Maintenance</h4>
                  </div>
                  <div class="card-body">
                  <?=$jml_maint?>
                  </div>
                </div>
              </div>
            </div>

            <?php if(userLogin()->name_user=='administrator') : ?>       
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                    <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>User Terdaftar</h4>
                      </div>
                      <div class="card-body">
                      <?=$jml_user?>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endif; ?>

          </div>
        <div class="section-body text-dark">
      <div class="row">
        <div class="col-lg-12 ">
              <div class="card">
                      <div class="card-header">
                      <h4>List Inventaris Handy Talkie</h4>
                      </div>
                      <div class="card-body p-3">
                      <div class="table-responsive">
                          
                          <table  id="example1" class="table table-bordered table-hover table-md dataTable dtr-inline p-2" role="grid" aria-describedby="example1_info">
                              <tbody>
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

                                  <?php $key=1; foreach ($get_inv as $key => $value): ?>

                                  <tr role="row" class="even odd">
                                      <td tabindex="0" class="sorting_1"><?=$key+1; ?></td>
                                      <td tabindex="0" class="sorting_1"><?=$value->dep_ht?></td>
                                      <td tabindex="0" class="sorting_1"><?=$value->lokasi_ht?></td>
                                      <td tabindex="0" class="sorting_1"><?=$value->alias_ht?></td>
                                      <td tabindex="0" class="text-center sorting_1" style="widht:10%">
                                          <!-- tombol detail -->
                                          <a href="/inventaris/<?= $value->id_ht ?>"
                                          class="btn btn-sm text-success"><i class="fas fa-eye"></i> View</a>                
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
        </div>   
      </div>  
    </section>

<?= $this->endSection() ?>
