<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class smartDoc extends CI_Controller {
		function __construct(){
			parent::__construct();
			// $this->load->model('smartDocModel');
		}
		public function index(){
			$data = [];
			$this->load->view('smartDocPage', $data);
		}
	}
?>
