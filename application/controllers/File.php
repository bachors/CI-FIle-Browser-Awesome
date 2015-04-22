<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);

class File extends CI_Controller {

	// Tentukan dulu URL path direktori yang akan di scan. Example: http://ibacor.com/download/file
	private $dirpath = "http://your-domain.com/public_file";
	 
	function index()
	{		
		$this->load->view('file');
	}

	function map()
	{
		$this->load->helper('fba_helper');
	
		$sub = $this->input->get("sub");
		
		$dirmap = fba($this->dirpath,$sub);

		// Output list direktori & file dalam format JSON
		echo json_encode(array(
			"root" => $sub,
			"back" => dirname($sub),
			"items" => $dirmap
		));
	}

	function read()
	{
		$file = $this->input->get("file");
		$dirname = basename($this->dirpath);
		if(!empty($file) && preg_match("/$dirname/", $file)){
			
			$sub = preg_replace("/$dirname/", '', $file);

			$text = file_get_contents($dirname.$sub);
			
			// Hanya menampilkan isi/teks file yang ada di dalam direktori $dirpath
			echo json_encode(array(
				"text" => $text
			));
		}else{	
			echo json_encode(array(
				"text" => 'No such file or directory'
			));
		
		}
    }
	
}
