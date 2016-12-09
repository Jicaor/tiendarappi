<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('guest/header');
		$this->load->view('guest/navbar');
		$this->load->view('content/home');
		$this->load->view('guest/footer');
	}
}
