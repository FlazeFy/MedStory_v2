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
		public function get_data_obat(){
			$data = $this->db->get('obat');
			return $data->result_array();
		}
		public function get_data_relasiObat(){
			$data = $this->db->get('relasiobatpenyakit');
			return $data->result_array();
		}
		public function get_data_kms(){
			$this->db->select('*');
			$this->db->from('kms');
			$this->db->join('pengguna','kms.id_user = pengguna.id_user');
			$condition = array('namaPengguna' =>  $this->session->userdata('userTrack'));
			$this->db->where($condition);
			$this->db->order_by('datecreated','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function insertKms($data){
			$this->db->insert('kms',$data);	
			// redirect('smartDoc');
		}
	}
?>
