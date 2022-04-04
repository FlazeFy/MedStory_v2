<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class nomorDarurat extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('nomorDaruratModel');
		}
		public function index(){
			$data = [];
			$data['dataFaskes']= $this->nomorDaruratModel->get_data_faskes();
			$data['dataPraktik']= $this->nomorDaruratModel->get_data_dokter();
			$this->load->view('nomorDaruratPage', $data);
		}
	}
?>
