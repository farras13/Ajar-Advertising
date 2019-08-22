<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function get_user($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('ads_m_user');
	}

	public function get_post()
	{
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('posts', 10);
	}

	public function chart()
	{
		$query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(created_at) as month_name FROM users WHERE YEAR(created_at) = '" . date('Y') . "'GROUP BY YEAR(created_at),MONTH(created_at)"); 
		return $query;
	}
	

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */