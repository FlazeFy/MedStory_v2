<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class SmartDocModel extends CI_Model {
		public function get_data_penyakit(){
			$data = $this->db->get('smartdoc');
			return $data->result_array();
		}
		public function get_data_gejala(){
			$data = $this->db->get('gejala');
			return $data->result_array();
		}	
		public function get_data_relasi(){
			$data = $this->db->get('relasipenyakitgejala');
			return $data->result_array();
		}	
	}
?>
