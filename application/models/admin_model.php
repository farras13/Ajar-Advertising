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
		$this->db->order_by('id', 'desc');
		return $this->db->get('posts', 10);
	}

	public function get_lang()
	{
		return $this->db->get('languages');
	}

	public function getCategory($lang)
	{
		$this->db->where('lang_id', $lang);
		$this->db->where('parent_id', 0);
		return $this->db->get('categories');
	}

	public function getSubCategory($cat)
	{
		$this->db->where('parent_id', $cat);
		$this->db->where('parent_id !=', 0);
		return $this->db->get('categories');
	}

	public function ins_post($level,$user, $title, $ctn, $slug, $summary, $key, $lang, $cat, $subcat)
	{
		$time = date("Y-m-d H:i:s");
		$dataInsert = array(
			'lang_id'			=> $lang,
			'title'				=> $title,
			'title_slug'		=> $slug,
			'keywords'			=> $key,
			'summary'			=> $summary,
			'content'			=> $ctn,
			'category_id' 		=> $cat,
			'subcategory_id' 	=> $subcat,
			'user_id'			=> $user,
			'status'			=> $level,
			'created_at' 		=> $time

		);
		return $this->db->insert('posts', $dataInsert); ;
	}

	public function chart()
	{
		$query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(created_at) as month_name FROM users WHERE YEAR(created_at) = '" . date('Y') . "'GROUP BY YEAR(created_at),MONTH(created_at)"); 
		return $query;
	}
	

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */