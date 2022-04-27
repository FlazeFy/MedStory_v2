<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class tentang extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('accountModel');
		}
		public function index(){
			$data = [];
			$data['dataUser']= $this->accountModel->get_data_user();
			$this->load->view('TentangPage', $data);
		}
	}
?>
