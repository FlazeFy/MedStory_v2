<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class accountModel extends CI_Model {
		public function get_data_user(){
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		
		//Ubah data akun
		function ubahData($data)
		{
			$id = $this->input->post('id');
			$this->db->where('id_user', $id);
			$this->db->update('pengguna', $data);
			redirect('account');
		}	
		//Statistik
		public function get_statistik_diskusi()
		{
			$this->db->select('*');
			$this->db->from('diskusi');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		public function get_statistik_balasan()
		{
			$this->db->select('*');
			$this->db->from('balasan');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('pengirim',$condition);
			return $data = $this->db->get()->result_array();
		}
	}
?>
