<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_M extends CI_Model {

	/**
	 *
	 * Upload Model
	 *
	 */
	public function Upload_Poster()
	{
		$this->template->load('Template/index','Content/beranda_v');
    }
    
    public function Upload_Logo()
	{
		$this->template->load('Template/index','Content/beranda_v');
	}
}
