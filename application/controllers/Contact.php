<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'contact';
		$this->load->view('template_user',$data);		
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */