<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		
		// moving data from controller to view

		$data['heading'] = "CI Home Page";

		$this->load->view('includes/header');
		$this->load->view('home_view', $data);
		$this->load->view('includes/footer');
	}

	public function test(){

		$myArray['thisheading'] = 'Test heading , this should pass to the view and echo out';
		$myArray['description'] = 'sample text entry';

		$this->load->view('includes/header');
		$this->load->view('test_view',  $myArray);
		$this->load->view('includes/footer');
	}
}
