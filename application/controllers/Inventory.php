<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	function __construct(){
        
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
      redirect('home');
    }
        $this->load->library('form_validation');
        $this->load->model('m_tampilan');
        $this->load->helper(array('form', 'url'));

    }

	public function tenda()
	{
        $data['tampilantenda'] = $this->m_tampilan->get_data_tenda();
		$this->load->view('tpackage', $data);
	}

	function addtenda(){
        $filename = md5(uniqid(rand(), true));
        $config = array(
            'upload_path' => 'assets/image/',
            'allowed_types' => "gif|jpg|png|jpeg",
            'file_name' => $filename
        );

        $d1 = $this->input->post('judula');
        $d2 = $this->input->post('lokasi');
        $d3 = $this->input->post('penginapan');
        $d4 = $this->input->post('harga');
        $d5 = $this->input->post('keterangan');
        $d6 = $this->input->post('lama');
        
        $this->load->library('upload', $config);

        if($this->upload->do_upload())
            {
            $file_data = $this->upload->data();
            
            $data['gambar'] = $file_data['file_name'];
            $data['judul_travel'] = $d1;
            $data['lokasi'] = $d2;
            $data['penginapan'] = $d3;
            $data['harga'] = $d4;
            $data['keterangan'] = $d5;
            $data['lama'] = $d6;
            $this->m_tampilan->save_data($data);
            redirect('inventory/tenda');
            }
            else
            {
            $data = array();            
            $data['tampilantenda'] = $this->m_tampilan->get_data_tenda();
            $error = $this->upload->display_errors();
            $data['errors'] = $error;

            redirect('inventory');
            }
    }

   
    function hapustenda($id){
    	$_id = $this->db->get_where('tb_barang',['id_barang' => $id])->row();
            $query = $this->db->delete('tb_barang',['id_barang'=>$id]);
            if($query){
                unlink("assets/image/".$_id->gambar);
            }
            redirect('inventory/tenda');
    }

 
    function updatetenda(){
        $filename = md5(uniqid(rand(), true));
        $config = array(
            'upload_path' => 'assets/image/',
            'allowed_types' => "gif|jpg|png|jpeg",
            'file_name' => $filename
        );

        $d1 = $this->input->post('judul');
        $d2 = $this->input->post('lokasi');
        $d3 = $this->input->post('penginapan');
        $d4 = $this->input->post('harga');
        $d5 = $this->input->post('keterangan');
        $d6 = $this->input->post('lama');
        
        $this->load->library('upload', $config);

        if($this->upload->do_upload('userfile2'))
            {
            $file_data = $this->upload->data();
            
            $data['gambar'] = $file_data['file_name'];
            $data['judul_travel'] = $d1;
            $data['lokasi'] = $d2;
            $data['penginapan'] = $d3;
            $data['keterangan'] = $d5;
            $data['harga'] = $d4;
            $data['lama'] = $d6;

            $where = array('id_barang' => $this->input->post('id'));
        	$this->m_tampilan->update_data($where,$data,'tb_barang');

            redirect('inventory/tenda');
            }
            else
            {
            $data = array();            
            $data['tampilantenda'] = $this->m_tampilan->get_data_tenda();
            $error = $this->upload->display_errors();
            $data['errors'] = $error;

            redirect('inventory');
            }
    }

   
}
