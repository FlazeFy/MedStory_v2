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
			$data['dataCovid']= $this->nomorDaruratModel->get_data_covid();
			$this->load->view('nomorDaruratPage', $data);
		}
		public function copyCoor(){
			$data['success_copy'] = "Kordinat berhasil disalin"; 
			$this->index();
			$this->load->view('nomorDaruratPage', $data);
		}
	}
?>
