<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller {
	 
	public function index()
	{		
		$this->load->view('demo.php');
	}
	
}
