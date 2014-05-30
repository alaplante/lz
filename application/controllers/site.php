<?php 

// Underscore before the function name makes the method private

class Site extends CI_Controller
{
	
	function index() {
		$this->load->model('site_model');
		$data['records']=$this->site_model->get_information();
		$this->load->view('home', $data);
	}
}
