<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tampilan extends CI_Model {

	
	function get_user(){
		$this->db->from('tb_user');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function get_dropdown_produk(){
		return $this->db->get('tb_barang');
	}

	function get_laporan(){
		$query = $this->db->get('tb_penjualan');
		return $query;
	}

	function get_laporan_detail($id){
		$this->db->from('tb_detail_penjualan');
				$this->db->join('tb_barang', 'tb_detail_penjualan.id_barang=tb_barang.id_barang');

		$this->db->where('kode_penjualan', $id);
		$query = $this->db->get();
		return $query;
	}

	function save_data_user($data,$table){
		$this->db->insert($table,$data);
	}

	function hapuskolab($where,$table){
		$this->db->where($where);
		$data['gambar'] = $nama;
		unlink('assets/image/'.$nama);
		$this->db->delete($table);
	}

	function update($data, $where){
		$this->db->update('tb_barang',$data,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function save_data($data){		
		$this->db->insert('tb_barang',$data);
	}

	function get_data_tenda(){
		$query = $this->db->get('tb_barang');
		return $query->result();		
	}

}
