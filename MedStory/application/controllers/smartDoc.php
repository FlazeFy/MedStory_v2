<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class smartDoc extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('SmartDocModel');
		}
		public function index(){
			$data = [];
			$data['dataPenyakit']= $this->SmartDocModel->get_data_penyakit();
			$data['dataGejala']= $this->SmartDocModel->get_data_gejala();
			$data['dataRelasi']= $this->SmartDocModel->get_data_relasi();
			$data['dataObat']= $this->SmartDocModel->get_data_obat();
			$data['dataRelasiObat']= $this->SmartDocModel->get_data_relasiObat();
			$this->load->view('smartDocPage', $data);
		}
		public function searchGejala()
		{
			$gejala = $this->input->post('gejala');

			//Mengecek ketersedian gejala.
			$this->db->select('*');
			$this->db->from('gejala');
			$condition = array('nama_gejala' => $gejala);
			$this->db->where($condition);
			$penyakitCheck = $this->db->get()->result_array();
			if(count($penyakitCheck) >= 1){
				$this->session->set_userdata('gejala',$gejala);	
				redirect('SmartDoc');
			}else{
				redirect('SmartDoc');
			}
		}
		
	}
?>
