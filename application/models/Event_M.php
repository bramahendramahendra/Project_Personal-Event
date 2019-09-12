<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_M extends CI_Model {

	/**
	 *
	 * Event Model
	 *
	 */
	public function CreateMessage_model()
	{
		$this->template->load('Template/index','Content/beranda_v');
	}
}
