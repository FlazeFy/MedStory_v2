<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class myData extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('myDataModel');
		}
		public function index(){
			$data = [];
			$data['dataUser']= $this->myDataModel->get_data_user();
			$data['dataAlergi']= $this->myDataModel->get_data_alergi();
			$data['dataPenyakit']= $this->myDataModel->get_data_penyakit();
			$data['dataVaksinasi']= $this->myDataModel->get_data_vaksinasi();
			$this->load->view('MyDataPage', $data);
		}
	}
?>
