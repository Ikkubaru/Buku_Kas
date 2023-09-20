<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_transaksi');
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index()
	{
		// $this->template->load('layout/template','dashboard');
		$this->load->view('dashboard');
	}
	public function laporan(){
		$tgl1 = $this->input->get('tanggal1');
		$tgl2 = $this->input->get('tanggal2');
		$this->db->from('transaksi');
		$this->db->where("tanggal >=",$tgl1);
		$this->db->where("tanggal <=",$tgl2);
		$laporan = $this->db->get()->result_array();
		$data = array(
			'tanggal1' => $tgl1,
			'tanggal2' => $tgl2,
			'laporan' => $laporan,
		);
		
	}
}
