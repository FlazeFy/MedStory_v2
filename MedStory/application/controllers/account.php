<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class account extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('accountModel');
			$this->load->helper("file");
		}
		public function index(){
			$data = [];
			$data['dataUser']= $this->accountModel->get_data_user();
			$data['statsDiskusi']= $this->accountModel->get_statistik_diskusi();
			$data['statsBalasan']= $this->accountModel->get_statistik_balasan();
			$this->load->view('AccountPage', $data);
		}

		//Change user data.
		public function ubah(){
			$data = [
				"namaLengkap" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"nomorPonsel" => $this->input->post('nomorPonsel'),
				"password" => $this->input->post('password'),
				"alamat" => $this->input->post('alamat'),
				"pekerjaan" => $this->input->post('pekerjaan'),
				"tinggiBadan" => $this->input->post('tinggiBadan'),
				"beratBadan" => $this->input->post('beratBadan')
			];
			$this->accountModel->ubahData($data, 'pengguna');
			$data['successEdit'] = "Akun berhasil diperbarui"; 
			$this->index();
			$this->load->view('AccountPage', $data);
		}

		//Upload user profile image.
		public function change(){
			//Get user image url.
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			$user = $this->db->get()->result_array();
			foreach($user as $u){
				$oldImage = $u['user_image'];
			}

			//Delete old image.
			$old = trim($oldImage);
			unlink('./assets/uploads/'.$old.'.jpg');

			//Upload new image.
			$new = substr(md5(uniqid(mt_rand(), true)), 0, 30);
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads',
				"allowed_types" => 'jpg',
				"max_size" => 5000,
				"remove_spaces" => TRUE,
				"file_name" => 'user_'.$new 
			));
			if (!$this->upload->do_upload('uploadImage')) {
				$error = array('error' => $this->upload->display_errors());
				redirect('account');
			} else {
				$data = [
					"user_image" => 'user_'.$new 
				];
				$this->accountModel->ubahData($data, 'pengguna');
				$data['successEdit'] = "Akun berhasil diperbarui"; 
				$this->index();
				$this->load->view('AccountPage', $data);
			}
		}

		//Upload required document.
		public function uploadDocument(){
			$condition = $this->session->userdata('userTrack');
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads',
				"allowed_types" => 'pdf|jpg|png',
				"max_size" => 3000,
				"remove_spaces" => TRUE,
				"file_name" => 'doc_' . $condition
			));
			if (!$this->upload->do_upload('uploadImage')) {
				$error = array('error' => $this->upload->display_errors());
				redirect('account');
			} else {
				redirect('account');
			}
		}
	}
?>
