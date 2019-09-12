<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	/**
	 *
	 * Beranda Controller
	 *
	 */
	public function index()
	{
		$data = array();
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/1/Header_V');
		$this->load->view('Content/Website/Beranda_V',$data);
		$this->load->view('Template/Website/1/Footer_V',$data);
	}
	
}
