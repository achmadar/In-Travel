<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
      redirect('home');
    }
        $this->load->library('form_validation');
        $this->load->model('m_tampilan');

    }

	public function index()
	{
		$data['tampiluser'] = $this->m_tampilan->get_user()->result_array();
		$this->load->view('home', $data);
	}

	function useradd(){
		$d1 = $this->input->post('nama');
        $d2 = $this->input->post('username');
        $d3 = $this->input->post('password');
        $d4 = $this->input->post('email');
        $data = array(
                    'nama' => $d1,
                    'username' => $d2,
                    'password' => $d3,
                    'email' => $d4,
                    'status' => 1
                    );  
        $this->m_tampilan->save_data_user($data,'tb_user');
        redirect('welcome');
	}

	function hapus($id){
        $where = array('id_user' => $id);
        $this->m_tampilan->hapuskolab($where,'tb_user');
        redirect('welcome');
    }

    function update(){
		$d1 = $this->input->post('nama');
		$d2 = $this->input->post('username');
		$d3 = $this->input->post('password');
		$d4 = $this->input->post('email');
		$data = array(
			'nama' => $d1,
			'username' => $d2,
			'password' => $d3,
			'email' => $d4,
			'status' => 1
		); 	
        $where = array('id_user' => $this->input->post('id'));
        $this->m_tampilan->update_data($where,$data,'tb_user');
        redirect('welcome');
    }

    function laporan(){
        $data['tampilanlaporan'] = $this->m_tampilan->get_laporan()->result_array();
        $this->load->view('laporan', $data);
    }

    function detail_laporan($id){
        $data['nama'] = $this->m_tampilan->get_nama($id)->row();
        $data['detail'] = $this->m_tampilan->get_laporan_detail($id)->result_array();
        $this->load->view('detail_laporan', $data);
    }

}
