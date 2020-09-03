<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_login');
	}

	public function index()
	{
		if ($this->m_login->check_is_login_user()){
			redirect('home');
		}
	}

	function loginindex(){
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$validate = $this->m_login->validate($username,$password);

		if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $iduser  = $data['id_user'];
        $nama = $data['username'];
        $status = $data['status'];
        $sesdata = array(
            'username'  => $nama,
            'iduser'     => $iduser,
            'status'     => $status,
            'logged_in' => TRUE
        );

        $this->session->set_userdata($sesdata);

        if($status === '1'){
            redirect('welcome');
        }elseif($status === '2'){
            redirect('home');
        }else{
            redirect('notfound');
        }
	}else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('home');
    }
}

	
 
	function logout(){
		$this->session->sess_destroy();
		redirect ('home');
	}
}