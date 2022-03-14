<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landing extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('landingModel');
		}
		 
		public function index(){
			$data = [];
			$this->load->view('LandingPage', $data);
		}
		/*Insert*/
		public function savedata(){
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->landingModel->recordlogin($data, 'loginuser');
		}
	}
?>
