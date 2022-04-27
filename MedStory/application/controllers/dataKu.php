<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class dataKu extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('DataKuModel');
			$this->load->model('accountModel');
		}
		public function index(){
			$data = [];
			$data['totalUserKebutuhan']= $this->DataKuModel->get_total_kebutuhan();
			$data['topAsupan']= $this->DataKuModel->get_total_asupan();
			$data['dataAsupan']= $this->DataKuModel->get_data_asupan();
			$data['dataKebutuhan']= $this->DataKuModel->get_data_kebutuhan();
			$data['dataJadwal']= $this->DataKuModel->get_data_jadwal();

			$data['dataUser']= $this->accountModel->get_data_user();
			$this->load->view('dataKuPage', $data);
		}
	}
?>
