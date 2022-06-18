<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>SIM-HT &mdash; Maintenance HT</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('user')?>" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>  Kembali</a>
            </div>
                <img alt="image" src="<?=base_url()?>/template/assets/img/ht.png" class="" width="40px">
                <h1>Daftarkan Akun</h1>
            
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="<?=site_url('/')?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?=site_url('user')?>">Manage User</a></div>
                    <div class="breadcrumb-item active"><a href="<?=site_url('users/new')?>">Tambah Data</a></div>
                </div>
        </div>

        <div class="section-body">

        <div class="card">
                <div class="card-header">
                <h4>Daftarkan Akun Baru</h4>
                </div>
                <div class="card-body p-3">
                    <table>
                        <form action="<?=site_url('user/create')?>" method="post" autocomplete="off" enctype="multipart/form-data">
                        <?= csrf_field() ?>                               
                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Nama User
                                    </td>

                                    <td>:</td>

                                    <td width="1000">
                                        <input type="text" class="form-control" id="name_user" name="name_user">                                    
                                    </td>

                                </div>
                            </tr>

                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Email User
                                    </td>

                                    <td>:</td>

                                    <td width="1000">
                                        <input type="email" class="form-control" id="email_user" name="email_user">                                    
                                    </td>

                                </div>
                            </tr>

                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Password User
                                    </td>

                                    <td>:</td>

                                    <td width="1000">
                                        <input type="password" class="form-control" id="password_user" name="password_user">                                    
                                    </td>

                                </div>
                            </tr>

                            <tr style="height: 50px;">
                                <div class="form-group">
                                    <td width="200">
                                    Info User
                                    </td>

                                    <td>:</td>

                                    <td width="1000">
                                        <input type="text" class="form-control" id="info_user" name="info_user">                                    
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
