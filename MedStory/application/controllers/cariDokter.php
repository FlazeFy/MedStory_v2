<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class cariDokter extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('cariDokterModel');
		}
		public function index(){
			$data = [];
			$data['dataPraktik']= $this->cariDokterModel->get_data_dokter();
			$this->load->view('CariDokterPage', $data);
		}
	}
?>
