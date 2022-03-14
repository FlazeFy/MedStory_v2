<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class cariDokterModel extends CI_Model 
	{
		function get_data_dokter()
		{
			$data = $this->db->get('dokterpraktik');
			return $data->result_array();
		}
	}
?>
