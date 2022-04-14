<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landingModel extends CI_Model 
	{
		function recordlogin($data)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//Mengecek ketersedian username.
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = array('namaPengguna' => $data['username'], 'password' => $data['password']);
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			if(count($userCheck) == 1){
				$this->session->set_userdata('userTrack',$username);	
				$this->session->set_userdata('lastLogin', date("Y/m/d h:i:sa"));
				redirect('history');
			}else{
				$error_message = "Username atau Password Anda salah!"; 
				$this->session->set_flashdata('error_login', $error_message);
				redirect('landing');
			}
		}	
		function buat($data)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//Mengecek ketersedian username.
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = array('namaPengguna' => $this->input->post('username'));
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			if(count($userCheck) == 0){
				$this->db->insert('pengguna',$data);
				$this->session->set_userdata('userTrack',$username);	
				redirect('history');
			}else{
				$error_message = "Daftar akun gagal. Periksa kembali data Anda!"; 
				$this->session->set_flashdata('error_create', $error_message);
				redirect('landing');
			}
		}
		function masukan($data)
		{
			$this->db->insert('masukan',$data);	
		}
		public function get_data_review(){
			$data = $this->db->get('review');
			return $data->result_array();
		}
		public function get_data_pengguna(){
			$data = $this->db->get('pengguna');
			return $data->result_array();
		}
	}
?>
