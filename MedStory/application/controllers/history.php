<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class history extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('historyModel');
		}
		public function index(){
			$data = [];
			$data['dataBerita']= $this->historyModel->get_data_berita();
			$data['dataDiskusi']= $this->historyModel->get_all_diskusi();
			$data['dataPertanyaan']= $this->historyModel->get_all_pertanyaan();
			$data['dataBalasan']= $this->historyModel->get_all_balasan();
			$this->load->view('HistoryPage', $data);
		}
		//Buat diskusi.
		public function tambahDiskusi(){
			if($this->input->post('imageSwitchD') == 'on'){
				$date = date("Ymdhis");
				$username = $this->session->userdata('userTrack');
				$imageURL = $username. '' .$date;
			} else {
				$imageURL = 'null';
			}
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads/diskusi',
				"allowed_types" => 'jpg',
				"max_size" => 5000,
				"remove_spaces" => TRUE,
				"file_name" => 'diskusi_' . $imageURL
			));

			$data = array(
				'id_diskusi' => 'NULL',
				'namaPengguna' => $this->session->userdata('userTrack'),
				'kategori' => $this->input->post('katTambah'),
				'pertanyaan' => $this->input->post('pertanyaanTambah'),
				'imageURL' => $imageURL,
				'datetime' => date("Y/m/d h:i:sa")
			);

			if($this->input->post('imageSwitchD') == 'on'){
				if (!$this->upload->do_upload('uploadImageD')) {
					$error = array('error' => $this->upload->display_errors());
					$data['error_message'] = "Error! your image is to big or not jpg";
					redirect('history');
				} else {
					$this->historyModel->posting($data, 'diskusi');
				}
			} else {
				$this->historyModel->posting($data, 'diskusi');
			} 
		}
		//Balas diskusi.
		public function balasDiskusi(){
			if($this->input->post('imageSwitchR') == 'on'){
				$date = date("Ymdhis");
				$username = $this->session->userdata('userTrack');
				$imageURL = $username. '' .$date;
			} else {
				$imageURL = 'null';
			}
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads/balasan',
				"allowed_types" => 'jpg',
				"max_size" => 5000,
				"remove_spaces" => TRUE,
				"file_name" => 'balasan_' . $imageURL
			));

			$data = array(
				'id_balasan' => 'NULL',
				'pengirim' => $this->session->userdata('userTrack'),
				'isi' => $this->input->post('inputIsi'),
				'id_diskusi' => $this->input->post('inputIdB'),
				'imageURL' => $imageURL,
				'datetime' => date("Y/m/d h:i:sa"),
				'status' => 'null'
			);

			if($this->input->post('imageSwitchR') == 'on'){
				if (!$this->upload->do_upload('uploadImageR')) {
					$error = array('error' => $this->upload->display_errors());
					$data['error_message'] = "Error! your image is to big or not jpg";
					redirect('history');
				} else {
					$this->historyModel->insertReply($data, 'balasan');
				}
			} else {
				$this->historyModel->insertReply($data, 'balasan');
			} 
		}

		//Verified jawaban.
		public function checkReply(){
			$this->db->set('status', 'verified');
			$this->db->where('id_balasan', $this->input->post('id_balasan'));
			$this->db->update('balasan');
			redirect('history');
		}
	}
?>
