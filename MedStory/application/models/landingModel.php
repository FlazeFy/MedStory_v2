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
				$data['error_message'] = "Username atau Password Anda salah!";
				$this->load->view('LandingPage', $data); //testing
				//redirect('landing');
			}
		}	
	}
?>
