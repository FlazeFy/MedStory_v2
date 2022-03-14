<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class pusatBantuan extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('pusatBantuanModel');
		}
		public function index(){
			$data = [];
			$data['dataUpdate']= $this->pusatBantuanModel->get_data_pengumuman();
			$this->load->view('pusatBantuanPage', $data);
		}
	}
?>
