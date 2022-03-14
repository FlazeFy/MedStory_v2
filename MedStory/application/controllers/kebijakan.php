<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class kebijakan extends CI_Controller {
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->load->view('kebijakanPage');
		}
	}
?>
