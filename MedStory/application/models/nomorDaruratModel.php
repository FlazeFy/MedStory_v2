<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class nomorDaruratModel extends CI_Model {
		public function get_data_faskes(){
			$data = $this->db->get('faskes');
			return $data->result_array();
		}
		public function get_data_dokter()
		{
			$data = $this->db->get('dokterpraktik');
			return $data->result_array();
		}
	}
?>
