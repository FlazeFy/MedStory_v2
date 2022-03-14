<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class myDataModel extends CI_Model {
		public function get_data_user(){
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		public function get_data_alergi(){
			$this->db->select('*');
			$this->db->from('riwayat_alergi');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		public function get_data_penyakit(){
			$this->db->select('*');
			$this->db->from('riwayat_penyakit');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			$this->db->order_by('tahun','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_data_vaksinasi(){
			$this->db->select('*');
			$this->db->from('riwayat_vaksinasi');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			$this->db->order_by('tahun','DESC');
			return $data = $this->db->get()->result_array();
		}
	}
?>
