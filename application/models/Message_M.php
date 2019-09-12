<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_M extends CI_Model {

	/**
	 *
	 * Message Model
	 *
	 */
	public function CreateMessage_model()
	{
		$this->template->load('Template/index','Content/beranda_v');
	}
}
