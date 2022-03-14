<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class tentang extends CI_Controller {
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->load->view('tentangPage');
		}
	}
?>
