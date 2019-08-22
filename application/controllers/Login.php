<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');

		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('sign');		
	}

	public function regis()
	{
		$email 		= $this->input->post('email');
		$pass 		= $this->input->post('newpassword');
		$password 	= md5($pass);
		$nama 		= $this->input->post('name');
		$company 	= $this->input->post('company');
		$phone 		= $this->input->post('phone');
		
		//check email sudah terdaftar atau belum
		$check = $this->login_model->checkemail($email);
		if ($email != $check->row()->email) {
			
			$dataInsert = array(
				'email'				=> $email,
				'password'			=> $password,
				'name'				=> $nama,
				'company_name'		=> $company,
				'telp'				=> $phone,
				'user_level'		=> 1,
			);

			$exc = $this->login_model->insert('ads_m_user',$dataInsert);

			if ($exc >= 1) {
				$this->session->set_flashdata('succes', "reg_in");
				redirect('Login');
			} else {
				$this->session->set_flashdata('error', 'failed_reg');
			}
		}
		else{
			$this->session->set_flashdata('error', "Email sudah terpakai");
			redirect('Login');
		}
	}

	public function Check()
	{
		$email 		= $this->input->post('username');
		$pass 		= $this->input->post('password');
		$password  	= md5($pass);
		$check 		= $this->login_model->login($email, $password);

		if ($check->row() != null) {
			$userdata = array('username' => $check->row()->email);
			$this->session->set_userdata('user_login', $userdata);
			redirect('Dashboard');
		}else{
			// echo "masih gagal say";
			$this->session->set_flashdata('gagal', 'prei lur');
			redirect('Login');
		}
	}

	public function Out()
	{
		session_destroy();
		redirect('Home','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */