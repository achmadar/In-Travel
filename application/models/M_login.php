<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function validate($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('tb_user',1);
    return $result;
  }

	function check_is_login_user(){
		if($this->session->userdata('username')){
			return TRUE;
		}else{
			return FALSE;
		}
	}	

}