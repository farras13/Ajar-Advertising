<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'paket';
		$this->load->view('template_user',$data);
	}
}

/* End of file Paket.php */
/* Location: ./application/controllers/Paket.php */