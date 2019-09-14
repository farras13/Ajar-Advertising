<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'index';
		$this->load->view('template_user',$data);		
	}

	public function Payment()
	{
		$data['main_view'] = 'payment';
		$this->load->view('template_user',$data);
	}

	public function Faq()
	{
		$data['main_view'] = 'faq';
		$this->load->view('template_user',$data);
	}

	public function Privacy()
	{
		$data['main_view'] = 'privacy';
		$this->load->view('template_user',$data);
	}

	public function Profile()
	{
		$data['main_view'] = 'profile';
		$this->load->view('template_user',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */