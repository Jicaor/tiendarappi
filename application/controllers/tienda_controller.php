<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda_controller extends CI_Controller {

	public function index()
	{
		// EL json se puede cambiar ruta local o URL
		$json = file_get_contents('assets/json/data.json');

		$obj = json_decode($json);
		$data["products"] = $obj->products;
		$data["categories"] = $obj->categories;

		$this->load->view('guest/header');
		$this->load->view('guest/navbar');
		$this->load->view('content/home', $data);
		$this->load->view('guest/footer');
	}

	public function about()
	{
		$this->load->view('guest/header');
		$this->load->view('guest/navbar');
		$this->load->view('content/about');
		$this->load->view('guest/footer');
	}
}
