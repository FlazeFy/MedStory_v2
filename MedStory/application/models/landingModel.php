<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landingModel extends CI_Model 
	{
		//Create new account.
		function buat($data)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = array('namaPengguna' => $this->input->post('username'));
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			if(count($userCheck) == 0){
				$this->db->insert('pengguna',$data);
				$this->session->set_userdata('userTrack',$username);
				$this->session->set_userdata('set_kategori', 'All');
				redirect('history');
			}else{
				$error_message = "Daftar akun gagal. Periksa kembali data Anda!"; 
				$this->session->set_flashdata('error_create', $error_message);
				redirect('landing');
			}
		}

		//Insert user feedback.
		function masukan($data)
		{
			$this->db->insert('masukan',$data);	
		}

		//Get data.
		public function get_data_review(){
			$data = $this->db->get('review');
			return $data->result_array();
		}
		public function get_data_pengguna(){
			$data = $this->db->get('pengguna');
			return $data->result_array();
		}
		public function get_data_pengumuman(){
			$this->db->select('*');
			$this->db->from('announcement');
			$this->db->order_by('tanggal', 'DESC');
			return $data = $this->db->get()->result_array();
		}
	}
?>
