<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class covidModel extends CI_Model 
	{
		public function get_all_vaksinasi()
		{
			$data = $this->db->get('vaksinasi');
			return $data->result_array();
		}
		public function get_all_tes()
		{
			$data = $this->db->get('tesCovid');
			return $data->result_array();
		}
		public function get_all_sertif()
		{
			$this->db->select('*');
			$this->db->from('sertifikatvaksin');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
	}
?>
