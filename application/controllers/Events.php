<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	/**
	 *
	 * Event Controller
	 *
	 */
	public function Bazaar()
	{
		$data = array ();
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Bazaar";
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Event/Bazaar_V');
		$this->load->view('Template/Website/2/Footer_V');
	}
    
  public function Job_Fair()
	{
		$data = array ();
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Job_Fair";
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Event/Job-Fair_V');
		$this->load->view('Template/Website/2/Footer_V');
	}
    
	public function Lomba()
	{
		$data = array ();
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Lomba";
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Event/Lomba_V');
		$this->load->view('Template/Website/2/Footer_V');
	}
    
	public function Pameran()
	{
		$data = array ();
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Pameran";
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Event/Pameran_V');
		$this->load->view('Template/Website/2/Footer_V');
	}
    
	public function Seminar()
	{
        $data = array ();
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Seminar";
		$data['name_page'] = 'Home';
		$this->load->view('Template/Website/2/Header_V',$data);
		$this->load->view('Content/Website/Event/Seminar_V');
		$this->load->view('Template/Website/2/Footer_V');
	}
}
