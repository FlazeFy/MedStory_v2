<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class forgot extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('forgotModel');
		}
		public function index(){
			$data = [];
			$this->load->view('ForgotPage', $data);
		}
		/*Update*/
		public function gantiPass(){
			$data = array(
				'namaPengguna' => $this->input->post('username'),
				'nik' => $this->input->post('nik'),
				'password' => $this->input->post('password')
			);
			$this->forgotModel->updatePassword($data, 'pengguna');
		}
	}
?>
