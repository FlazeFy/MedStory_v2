<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class pusatBantuanModel extends CI_Model {
		public function get_data_pengumuman(){
			$this->db->select('*');
			$this->db->from('announcement');
			$this->db->order_by('tanggal', 'DESC');
			return $data = $this->db->get()->result_array();
		}
	}
?>
