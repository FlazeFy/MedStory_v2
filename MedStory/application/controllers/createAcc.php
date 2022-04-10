<?php
/*DELETE LATER*/
	defined('BASEPATH') OR exit('No direct script access alowed');

	class createAcc extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('createAccModel');
		}
		public function index(){
			$data = [];
			$this->load->view('CreateAccPage', $data);
		}
		/*Insert Buat akun*/
		public function newUser(){
			$condition = $this->input->post('username');
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads',
				"allowed_types" => 'jpg',
				"max_size" => 1000,
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
				redirect('createAcc');
			} else {
				$this->createAccModel->buat($data, 'pengguna');
			}
		}
	}
?>
