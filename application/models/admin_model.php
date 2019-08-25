<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function get_user($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('ads_m_user');
	}
	

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */