<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landing extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('landingModel');
		}
		 
		public function index(){
			$data = [];
			$data['dataReview']= $this->landingModel->get_data_review();
			$data['dataPengguna']= $this->landingModel->get_data_pengguna();
			$this->load->view('LandingPage', $data);
		}
		/*Insert*/
		public function savedata(){
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->landingModel->recordlogin($data, 'loginuser');
		}
		/*Insert Buat akun*/
		public function newUser(){
			$condition = $this->input->post('username');
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads',
				"allowed_types" => 'jpg',
				"max_size" => 5000,
				"remove_spaces" => TRUE,
				"file_name" => 'user_' . $condition
			));
			$data = array(
				//Data diri
				"namaLengkap" => $this->input->post('fullname'),
				"nik" => $this->input->post('nik'),
				"tempatLahir" => $this->input->post('tLahir'),
				"tanggalLahir" => $this->input->post('tglLahir'),
				"alamat" => $this->input->post('add'),
				"pekerjaan" => $this->input->post('job'),
				"tinggiBadan" => $this->input->post('tBadan'),
				"beratBadan" => $this->input->post('bBadan'),
				"jKelamin" => $this->input->post('cat_input'),
				//Data akun
				"namaPengguna" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"nomorPonsel" => $this->input->post('ponsel'),
				"password" => $this->input->post('password')
			);
			if (!$this->upload->do_upload('uploadImage')) {
				$error = array('error' => $this->upload->display_errors());
				redirect('landing');
			} else {
				$this->landingModel->buat($data, 'pengguna');
			}
		}
		public function insertMasukkan(){
			$data = array(
				'id_masukan' => 'NULL',
				'text' => $this->input->post('nama'),
				'nama' => $this->input->post('sarankritik'),
				'datetime' => date("Y/m/d h:i:sa")
			);
			$this->landingModel->masukan($data, 'masukan');
			$data['message_Masukan'] = "Kritik dan saran Anda sangat kami hargai";
			$this->index();
			$this->load->view('LandingPage', $data);
		}
	}
?>
