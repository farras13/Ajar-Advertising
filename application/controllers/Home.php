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
		
		$this->load->view('payment');
	}

	public function Faq()
	{
		$this->load->view('faq');
	}

	public function Privacy()
	{
		$this->load->view('privacy');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */