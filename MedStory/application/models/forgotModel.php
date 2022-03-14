<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class forgotModel extends CI_Model 
	{
		function updatePassword($data)
		{
			$username = $this->input->post('username');

			//Mengecek ketersedian username.
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = array('namaPengguna' => $data['namaPengguna'], 'nik' => $data['nik']);
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			if(count($userCheck) == 1){
				$this->session->set_userdata('userTrack',$username);	
				$this->session->set_userdata('lastLogin', date("Y/m/d h:i:sa"));
				$this->db->where('namaPengguna', $username);
				$this->db->update('pengguna', $data);
				redirect('history');
			}else{
				$data['error_message'] = "Nama Pengguna atau NIK tidak terdaftar";
				$this->load->view('ForgotPage', $data);
			}
		}	
	}
?>
