<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	/**
	 *
	 * Subscribe Controller
	 *
	 */
	public function index($name_page)
	{
		if ($this->form_validation->run('subscribe-validation') == FALSE) 
		{
			// if form validation failed
			$this->session->set_flashdata('Modal-Alert','Failed-Subscribe');
			redirect(site_url($name_page));
		} 
		else 
		{
			// if form validation success
			// check duplicate
			// $email = $this->input->post('email');
			$duplikat = $this->Check_Duplicate_Subscribe($this->input->post('email'));
			if($duplikat == TRUE)
			{
				//if email duplicate
				$this->session->set_flashdata('Modal-Alert','Duplicate-Subscribe');
				redirect(site_url($name_page));
			}
			else
			{
				// if save email subscribe
				// echo "false";
				$this->Create_Subscribe($this->input->post('email'));
				$this->session->set_flashdata('Modal-Alert','Success-Subscribe');
				redirect(site_url($name_page));
			}
		}
	}

	public function Check_Duplicate_Subscribe($email)
	{
		return $this->Subscribe_M->Check_Duplicate_Email_Subscribe($email);
	}

	public function Create_Subscribe($email)
	{
		$data = array (
			'email' => $email
		);
		$this->Subscribe_M->Create_Subscribe($data);
	}

}
