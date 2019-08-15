<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
        return $this->db->get('ads_m_user');	
	}

	public function insert($tableName, $data)
	{
	 	$res = $this->db->insert($tableName, $data);
        return $res;
	}

	public function checkemail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('ads_m_user');
    }

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */