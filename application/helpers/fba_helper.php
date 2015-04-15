<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*********************************************************************
* #### CI File Browser Awesome v01 ####
* Coded by Ican Bachors 2015.
* https://github.com/bachors/CI-FIle-Browser-Awesome
* Updates will be posted to this site.
*********************************************************************/

if ( ! function_exists('fba'))
{

	function fba($path,$sub){
		// Menentukan absolute URL yang menuju ke $path. Output: http://ibacor.com/download/
		$link = dirname($path).'/';

		// Menentukan direktori yang akan di scan. Output: file
		$realpath = explode('/', $path);

		$dir = $realpath[sizeof($realpath)-1].$sub;

		// Jalankan fungsi scan
		return scan($dir,$link,$sub);

	}


	// Fungsi ini untuk menscan folder secara rekursif, dan membangunnya menjadi array
	function scan($dir,$link,$sub){

		$files = array();

		// Apakah benar-benar terdapat folder/file?
		if(file_exists($dir)){
		
			foreach(scandir($dir) as $f) {
			
				if(!$f || $f[0] == '.') {
					continue; // Abaikan file tersembunyi
				}

				if(is_dir($dir . '/' . $f)) {

					// List folder
					$files[] = array(
						"name" => $f,
						"type" => "folder",
						"modif" => date('Y-m-d h:i:s',filemtime($dir . '/' . $f)),
						"path" => $sub . '/' . $f,
						"items" => item($dir . '/' . $f) // Menscan lagi isi folder
					);
				}
				
				else {

					// List file
					$files[] = array(
						"name" => $f,
						"type" => "file",
						"link" => $link,
						"path" => $dir . '/' . $f,
						"modif" => date('Y-m-d h:i:s',filemtime($dir . '/' . $f)),
						"size" => filesize($dir . '/' . $f) // Mendapatkan ukuran file
					);
				}
			}
		
		}

		return $files;
	}

	// funsi ini untuk mendapatkan jumlah item dalam sebuah folder
	function item($dir){

		foreach(scandir($dir) as $f) {		
			if(!$f || $f[0] == '.') {
				continue; // Abaikan file tersembunyi
			}
			$files[] = array(
				"name" => $f
			);
		}

		return $files;
	}

}
