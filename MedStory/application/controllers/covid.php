<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class covid extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('covidModel');
		}
		public function index(){
			$data = [];
			$data['dataVaksinasi']= $this->covidModel->get_all_vaksinasi();
			$data['dataTes']= $this->covidModel->get_all_tes();
			$data['dataSertifikat']= $this->covidModel->get_all_sertif();
			$this->load->view('covidPage', $data);
		}
	}
?>
