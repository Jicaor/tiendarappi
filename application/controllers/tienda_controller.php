<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda_controller extends CI_Controller {

	public function index()
	{

		// Get the string from the URL
		$json = file_get_contents('assets/json/data.json');

// Decode the JSON string into an object
		$obj = json_decode($json);

// In the case of this input, do key and array lookups to get the values
		//var_dump($obj->products);
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
