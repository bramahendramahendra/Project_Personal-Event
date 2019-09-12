<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	/**
	 *
	 * Tentang Controller
	 *
	 */
	public function index()
	{
		$data = array ();
		$data['header']['page1'] = "Tentang";
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Tentang_V');
		$this->load->view('Template/Website/2/Footer_V');
	}
}
