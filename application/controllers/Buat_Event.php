<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_Event extends CI_Controller {
	/**
	 *
	 * Buat Event Controller
	 *
	 */
	public function index()
	{
		$data = array();
		$data['header']['page1'] = "Buat Event";
		$data['name_page'] = 'Buat_Event';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Buat-Event_V',$data);
		$this->load->view('Template/Website/2/Footer_V',$data);
	}

	public function create_event()
	{
		$poster = $this->Upload_M->Upload_Poster('poster'); //Get post
		$logo = $this->Upload_M->Upload_Logo('logo'); //Get post

		echo ("Nama Event : ");
		echo $_POST['nama_event'];
		echo ("<br>");

		echo $_POST['kategori_event'];
	}
	
}
