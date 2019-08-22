<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
		$this->load->model('admin_model');
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
		$data['post'] = $this->admin_model->get_post()->result();
		

		if ($userdata != null) {
			$data['profil'] = $this->admin_model->get_user($user)->row();	
			$this->load->view('dashboard', $data);
		}else{
			redirect('Home','refresh');
		}
		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */