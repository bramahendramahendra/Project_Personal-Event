<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 *
	 * Beranda Controller
	 *
	 */
	public function index()
	{
		$data = array ();
		$data['header']['page1'] = "Kontak";
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Kontak_V');
		$this->load->view('Template/Website/2/Footer_V');
	}
}
