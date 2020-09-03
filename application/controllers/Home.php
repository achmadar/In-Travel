<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {       
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
        $this->load->model('m_tampilan');
    }


	public function index()
	{
		$this->load->view('home/index');
	}

      function view_package(){
        $data['tampilantenda'] = $this->m_tampilan->get_data_tenda();
        $this->load->view('home/vpackage', $data);
    }

    function view_book(){
        $data['produk'] = $this->m_tampilan->get_dropdown_produk()->result_array();
        $this->load->view('home/vbook', $data);
    }

    function view_tenda(){
        $data['tampilantenda'] = $this->m_tampilan->get_data_tenda();
        $this->load->view('home/vtenda', $data);
    }

    function addpenjualan(){
        $kode= $this->input->post('userid');

        $d1 = $this->input->post('idbarang');
        $d2 = $this->input->post('namaproduk');
        $d3 = $this->input->post('jmlbeli');
        $d4 = $this->input->post('hrg');
        
        $d5 = $this->input->post('name');
        $d6 = $this->input->post('nomor');
        $d7 = $this->input->post('email');
        $d8 = $this->input->post('date');
        $d9 = $this->input->post('date2');
        $d10 = $this->input->post('kode');


        $data = array(
          'user_id' => $this->input->post('id'),
          'nama_lengkap' => $this->input->post('nama'),
          'telepon' => $this->input->post('nomor'),
          'email' => $this->input->post('email'),
          'tgl_berangkat' => $this->input->post('tglberangkat'),
          'kode_penjualan' => $this->input->post('kode')
        );
        $this->db->insert('tb_penjualan',$data);

       $data = array(
          'user_id' => $this->input->post('id'),
          'id_barang' => $this->input->post('paket'),
          'nama' => $this->input->post('nama'),
          'alamat' => $this->input->post('alamat'),
          'telepon' => $this->input->post('nomor'),
          'alamat2' => $this->input->post('alamat2'),
          'metode' => $this->input->post('metode'),
          'email' => $this->input->post('email'),
          'tgl_berangkat' => $this->input->post('tglberangkat'),
          'kode_penjualan' => $this->input->post('kode')
        );
        $this->db->insert('tb_detail_penjualan',$data);

        redirect('home');

    }


    function logout(){
        $this->session->sess_destroy();
        redirect ('home');
    }
}
