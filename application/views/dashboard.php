<?php
	$pemasukan = $this->M_transaksi->pemasukan();
	$pengeluaran = $this->M_transaksi->pengeluaran();
	$saldo_end = $pemasukan - $pengeluaran;
?>
<title>
	Dashboard
</title>
<?php 
require_once('layout/header.php');
require_once('layout/sidebar.php');
?>
  <!--Start Dashboard Content-->
  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">Laporan</button>
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
      <h2 class="logo-text">Welcome <?= $this->session->userdata('nama') ?></h2>
	  	<div class="col-xs-12">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <td colspan="4" style="text-align: center; font-size: 18px;">TOTAL SEMUA PEMASUKAN 
                  </td>
                </tr>
                <tr>
                  <td style="text-align: center;">HARI INI</td>
                  <td style="text-align: center;">BULAN INI</td>
                  <td style="text-align: center;">TOTAL PEMASUKAN</td>
                </tr>
                <tr>
                  <td style="text-align: center;">Rp. <?= number_format($this->M_transaksi->pemasukan_today()); ?></td>
                  <td style="text-align: center;">Rp. <?= number_format($this->M_transaksi->pemasukan_month()); ?></td> 
                  <td style="text-align: center;">Rp. <?= number_format($this->M_transaksi->pemasukan()); ?></td> 
                </tr>
				</tbody>
              </table>
				
			  <table class="table table-striped">
        <tbody>
				<tr>
                  <td colspan="4" style="text-align: center; font-size: 18px;">TOTAL SEMUA PENGELUARAN
                  </td>
                </tr>
				<tr>
                  <td style="text-align: center;">HARI INI</td>
                  <td style="text-align: center;">BULAN INI</td>
                  <td style="text-align: center;">TOTAL PENGELUARAN</td>

                </tr>
				<tr>
                  <td style="text-align: center;">Rp. <?= number_format($this->M_transaksi->pengeluaran_today()); ?></td>
                  <td style="text-align: center;">Rp. <?= number_format($this->M_transaksi->pengeluaran_month()); ?></td> 
                  <td style="text-align: center;">Rp. <?= number_format($this->M_transaksi->pengeluaran()); ?></td> 
                </tr>
                </tbody>
              </table>
              <table class="table table-striped">
                <tbody>
                <tr>
                <td style="text-align: center;">SALDO AKHIR</td>
                </tr>
                <tr>
                <td style="text-align: center;">Rp. <?= number_format($saldo_end); ?></td> 
                </tr>
                </tbody>
              </table>

          </div>
	 </div>
	 
	</div>
  <!--End Dashboard Content-->
<?php require_once('layout/footer.php');?>
<?php require_once('layout/js.php'); ?>
 
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="<?= base_url('laporanpdf/laporan_all') ?>">
      <div class="modal-body">
            <div class="form-group">
             <label for="input-2">Tanggal Awal</label>
             <input type="date" class="form-control"  name="tanggal1" placeholder="" required>
            </div>
            <div class="form-group">
             <label for="input-2">Tanggal Akhir</label>
             <input type="date" class="form-control"  name="tanggal2" placeholder="" required>
            </div>
            <!-- <div class="form-group">
             <label for="input-2">Kategori</label>
              <select name="kategori" id="" class="form-select">
                <option value=""></option>
                <option value=""></option>
              </select>
            </div> -->

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