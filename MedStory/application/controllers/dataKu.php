<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class dataKu extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('DataKuModel');
			$this->load->model('accountModel');
			$this->load->library('calendar');
		}
		public function index(){
			$data = [];
			$data['totalUserKebutuhan']= $this->DataKuModel->get_total_kebutuhan(); //For chart
			$data['totalUserKebutuhan2']= $this->DataKuModel->get_total_kebutuhan2(); //For modal add cal day
			$data['topAsupan']= $this->DataKuModel->get_total_asupan();
			$data['dataAsupan']= $this->DataKuModel->get_data_asupan();
			$data['dataKebutuhan']= $this->DataKuModel->get_data_kebutuhan();
			$data['dataJadwal']= $this->DataKuModel->get_data_jadwal();

			$data['dataUser']= $this->accountModel->get_data_user();
			$this->load->view('dataKuPage', $data);
		}

		//Add asupan.
		public function tambahJadwalCal(){
			$total = $this->input->post('id_asupan[]');		
			for($i = 0; $i < count($total); $i++){	
				$data = array(
					'id_jadwal' => 'NULL',
					'id_user' => $this->input->post('id_user'),
					'id_asupan' => $total[$i],
					'date' => $this->input->post('date'),
					'waktu' =>  $this->input->post('waktu')
				);	
				$this->DataKuModel->insertJadwal($data, 'jadwalkalori');
			}
			redirect('dataKu');
		}

		//Add daily calorie.
		public function calHarian(){
			$data = array(
				'id_kebutuhan' => 'NULL',
				'id_user' => $this->input->post('id_user'),
				'kalori' => $this->input->post('calTotal'),
				'date' => $this->input->post('date2'),
			);

			//Validate calorie.	
			if(($data['kalori'] >= 600)&&($data['kalori'] <= 6000)){
				$this->DataKuModel->insertCal($data, 'kebutuhankalori');
			} else {
				$data['error_tambahCalHarian'] = "Masukkan kalori yang valid!"; 
				$this->index();
				$this->load->view('DataKuPage', $data);
			}
		}
	}
?>
