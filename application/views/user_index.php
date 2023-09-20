
<center>
<div id="hilang">
    <?= $this->session->flashdata('alert',TRUE);?>
</div>
    <h3>Data User</h3>
    <a href="<?= base_url('user/tambah') ?>">
        <button class="btn btn-light">Tambah User</button>
    </a>
</center>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col" width="20%">Username</th>
                            <th scope="col" width="20%">Nama</th>
                            <th scope="col" width="7%">Level</th>
                            <th scope="col" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php  
                      $no = 1;
                      foreach($user as $aa){ ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $aa['username']; ?></td>
                            <td><?= $aa['nama']; ?></td>
                            <td><?= $aa['level']; ?></td>
                            <td>
                                <!-- edit -->
                                <a href="<?= base_url('user/edit/'.$aa['id_user']) ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a>
                                <!-- delete -->
                                <a onClick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" 
                                href="<?= base_url('user/hapus/'.$aa['id_user']) ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
                            </td>
                        </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>