<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teinda_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
