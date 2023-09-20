<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		if($this->session->userdata('level')!='Admin'){
		redirect('home');
		}
	}
	public function index()
	{
		$this->db->select('*')->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->result_array();
		$data = array('user' => $user);
		$this->template->load('layout/template','user_index',$data);
	}
	public function tambah()
	{
		$this->template->load('layout/template','user_tambah');
	}
	public function edit($id){
		$this->db->select('*')->from('user');
		$this->db->where('id_user',$id);
		$user = $this->db->get()->result_array();
		$data = array('user'=>$user);
		$this->template->load('layout/template','user_edit',$data);
	}
	public function hapus($id){
		$where = array('id_user'=> $id);
		$this->db->delete('user',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Dihapus
		</div>
		');
		redirect('user');
	}
	public function update(){
		$this->M_user->update();
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Diperbarui
		</div>
		');
		redirect('user');
	}
	public function simpan(){
		$username = $this->input->post('username');
		$this->db->from('user');
		$this->db->where('username',$username);
		$query = $this->db->get()->result_array();	
		if($query <> NULL){
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>Username Sudah Digunakan
			</div>
			');
			redirect('user');
		}else{
			$this->M_user->simpan();
			$this->session->set_flashdata('alert','
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Disimpan.
			</div>
			');
			redirect('user');
		}
	}
}
