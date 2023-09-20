<center>
<div id="hilang">
    <?= $this->session->flashdata('alert',TRUE);?>
</div>
    <h3>Data Pengeluaran</h3>
<!-- Button trigger modal -->
<a href="<?= base_url('laporanpdf/pengeluaran') ?>"><button type="button" class="btn btn-light">
    Cetak
</button></a>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= base_url('pengeluaran/simpan') ?>">
      <div class="modal-body">
           <div class="form-group">
            <label for="input-1">Keterangan</label>
            <input type="text" class="form-control"  name="keterangan" placeholder="Masukkan Keterangan" required>
           </div>
           <div class="form-group">
             <label for="input-3">Nominal</label>
             <input type="text" class="form-control"  name="nominal" placeholder="Masukkan Nominal" required>
            </div>
            <div class="form-group">
             <label for="input-2">Tanggal</label>
             <input type="date" class="form-control"  name="tanggal" placeholder="" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-light">Simpan</button>
        </div>
    </div>
    </form>
  </div>
</div>
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
                            <th scope="col" width="20%">Tanggal</th>
                            <th scope="col" width="20%">Keterangan</th>
                            <th scope="col" width="20%">Username</th>
                            <th scope="col" width="7%">Nominal</th>
                            <th scope="col" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php  
                      $no = 1;
                      foreach($pengeluaran as $aa){ ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $aa['tanggal']; ?></td>
                            <td><?= $aa['keterangan']; ?></td>
                            <td><?= $aa['username']; ?></td>
                            <td>Rp. <?= number_format($aa['nominal']); ?></td>
                            <td>
                                <!-- delete -->
                                <a onClick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" 
                                href="<?= base_url('pengeluaran/hapus/'.$aa['id_transaksi']) ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>