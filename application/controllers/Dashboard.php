<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$userdata = $this->session->userdata('user_login');
		
		if ($userdata['level_system'] != 1 ) {
			redirect('Login','refresh');
		}
		
		$this->load->model('admin_model');
		date_default_timezone_set("Asia/Bangkok");

	}
	
	public function index()
	{
		$userdata = $this->session->userdata('user_login');
		$user = $userdata['username'];
		$record = $this->admin_model->chart()->result();
		$data = [];
 
	    foreach($record as $row) {
	        $data['label'][] = $row->month_name;
	        $data['data'][] = (int) $row->count;
	    }
	    $data['chart_data'] = json_encode($data);
		$data['profil'] = $this->admin_model->get_user($user)->row();
		$data['lang'] = $this->admin_model->get_lang()->result();
		$data['post'] = $this->admin_model->get_post()->result();
		$this->load->view('dashboard', $data);
	
	}

	public function getCategory()
	{
		$lang 	  = $this->input->post('lang');
        $data     = $this->admin_model->getCategory($lang)->result();
        echo json_encode($data);
	}

	public function getSubCategory()
	{
		$cat 	  = $this->input->post('category');
        $data     = $this->admin_model->getSubCategory($cat)->result();
        echo json_encode($data);
	}

	public function add_post()
	{
		$userdata = $this->session->userdata('user_login');

		$level      = $userdata['level_system'];
		$user 		= $userdata['id'];
		$title 		= $this->input->post('title');
		$ctn 		= $this->input->post('content');
		$slug 		= $this->input->post('title_slug');
		if ($slug == null) {
			$slug = $title;
		}
		$summary	= $this->input->post('summary');
		$key 		= $this->input->post('keywords');
		$lang 		= $this->input->post('lang');
		$cat 		= $this->input->post('category');
		$subcat  	= $this->input->post('subcategory');

		$ins = $this->admin_model->ins_post($level ,$user, $title, $ctn, $slug, $summary, $key, $lang, $cat, $subcat);

		if ($ins >= 1 ) {
			$this->session->set_flashdata('success', "Post berhasil di tambahkan";
			redirect('Dashboard');
		}


	}


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */