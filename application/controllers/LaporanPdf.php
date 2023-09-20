<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LaporanPdf extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('Laporan'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
	}
	function pemasukan()
	{
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$pdf = new FPDF('L', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->Cell(0, 7, 'Laporan Pemasukan', 0, 1, 'C');
		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 6, 'No', 1, 0, 'C');
		$pdf->Cell(30, 6, 'Tanggal', 1, 0, 'C');
		$pdf->Cell(100, 6, 'Keterangan', 1, 0, 'C');
		$pdf->Cell(30, 6, 'Jenis Transaksi', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Nominal', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		$transaksi = $this->db->where('jenis_transaksi', 'Pemasukan')->get('transaksi')->result();
		$no = 0;
		foreach ($transaksi as $data) {
			$no++;
			$pdf->Cell(10, 6, $no, 1, 0, 'C');
			$pdf->Cell(30, 6, $data->tanggal, 1, 0);
			$pdf->Cell(100, 6, $data->keterangan, 1, 0);
			$pdf->Cell(30, 6, $data->jenis_transaksi, 1, 0);
			$pdf->Cell(40, 6, 'Rp. ' . number_format($data->nominal), 1, 1);
		}
		
		$pdf->Output();
	}
	function pengeluaran()
	{
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$pdf = new FPDF('L', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->Cell(0, 7, 'Laporan Pengeluaran', 0, 1, 'C');
		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 6, 'No', 1, 0, 'C');
		$pdf->Cell(30, 6, 'Tanggal', 1, 0, 'C');
		$pdf->Cell(100, 6, 'Keterangan', 1, 0, 'C');
		$pdf->Cell(30, 6, 'Jenis Transaksi', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Nominal', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		$transaksi = $this->db->where('jenis_transaksi', 'Pengeluaran')->get('transaksi')->result();
		foreach ($transaksi as $data) {
			$no++;
			$pdf->Cell(10, 6, $no, 1, 0, 'C');
			$pdf->Cell(30, 6, $data->tanggal, 1, 0);
			$pdf->Cell(100, 6, $data->keterangan, 1, 0);
			$pdf->Cell(30, 6, $data->jenis_transaksi, 1, 0);
			$pdf->Cell(40, 6, 'Rp. ' . number_format($data->nominal), 1, 1);
		}
		
		$pdf->Output();
	}
	function laporan_all(){
		$tgl1 = $this->input->get('tanggal1');
		$tgl2 = $this->input->get('tanggal2');
		$query = $this->db->where("tanggal >=",$tgl1)->where("tanggal <=",$tgl2)->get('transaksi')->result();
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$pdf = new FPDF('L', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetFont('times', 'B', 16);
		$pdf->Cell(0, 7, 'Laporan Akhir', 0, 1, 'C');
		$pdf->Cell(20, 7, '', 0, 1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 6, 'No', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Tanggal', 1, 0, 'C');
		$pdf->Cell(60, 6, 'Keterangan', 1, 0, 'C');
		$pdf->Cell(50, 6, 'Pemasukan', 1, 0, 'C');
		$pdf->Cell(50, 6, 'Pengeluaran', 1, 0, 'C');
		$pdf->Cell(50, 6, 'Saldo Akhir', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);

		$saldo = 0;
		foreach ($query as $data) {
			
			$no++;
			$pdf->Cell(10, 6, $no, 1, 0, 'C');
			$pdf->Cell(40, 6, $data->tanggal, 1, 0,'C');
			$pdf->Cell(60, 6, $data->keterangan, 1, 0,'C');
				if($data->jenis_transaksi == 'pemasukan'){
			$pdf->Cell(50, 6, number_format($data->nominal),1, 0,'C');
			$pdf->Cell(50, 6, '',1, 0);
			$saldo = $saldo + $data->nominal;
			}
				if($data->jenis_transaksi == 'pengeluaran'){
				$pdf->Cell(50, 6, '',1, 0);
				$pdf->Cell(50, 6, number_format($data->nominal),1, 0,'C');
				$saldo = $saldo - $data->nominal;
				}
			$pdf->Cell(50, 6, 'Rp. ' . number_format($saldo), 1, 1,'C');
		}
		$pdf->Output();
	}
}