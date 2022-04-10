<?php 
/*DELETE LATER*/
	defined('BASEPATH') OR exit('No direct script access alowed');

	class createAccModel extends CI_Model 
	{
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
				$data['error_message'] = "Buat akun gagal. Periksa kembali data Anda";
				$this->load->view('CreateAccPage', $data);
				//redirect('createAcc');
			}
		}
	}
?>
