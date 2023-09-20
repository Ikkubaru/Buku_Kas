<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_model {
    public function pemasukan_today(){
        $tanggal = date('Y-m-d');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m-%d')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pemasukan_month(){
        $tanggal = date('Y-m');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pemasukan(){
        $tanggal = date('Y-m');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        return $this->db->get()->row()->total;
    }
    public function pengeluaran_today(){
        $tanggal = date('Y-m-d');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m-%d')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pengeluaran_month(){
        $tanggal = date('Y-m');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pengeluaran(){
        $tanggal = date('Y-m');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        return $this->db->get()->row()->total;
    }
}