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
		$data['profil'] = $this->admin_model->get_user($user)->row();
		
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